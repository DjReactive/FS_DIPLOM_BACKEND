<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketsRequest;
use App\Models\ShowTimes;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketsController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'timestamp' => ['required', 'string'],
            'showtime_id' => ['required', 'integer'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $tickets = Tickets::query()
                    ->where('showtime_id', $request['showtime_id'])
                    ->where('start_date', $request['timestamp'])
                    ->get();

        if (!$tickets) {
            return response()->json(['error' => 'Invalid request'], 400);
        }

        return $tickets;
    }

    public function create(TicketsRequest $request) {
        return $this->store($request);
    }

    public function store(TicketsRequest $request)
    {
        $showtime = ShowTimes::where('id', $request['showtime_id'])->firstOrFail();
        if (!$showtime || !$request->validated()) {
            return response()->json([
                'message' => 'Your request invalid'
            ], 400);
        }
        $hash_ticket = Crypt::encrypt($request['seat_places'] . $request['start_date'] . $request['showtime_id']);
        if (Tickets::create([
            'showtime_id' => $request['showtime_id'],
            'seat_places' => $request['seat_places'],
            'start_date' => $request['start_date'],
            'ticket_unique_id' => $hash_ticket,
            'cost' => $request['cost'],
        ])) return response()->json([
            'ticket_id' => $hash_ticket
        ], 200);

        return response()->json([
            'error' => 'Failed add ticket'
        ], 400);
    }

    public function show($id)
    {
        return Tickets::query()->where('ticket_unique_id', $id)
            ->join('show_times', 'show_times.id', '=', 'tickets.showtime_id')
            ->join('movies', 'movies.id', '=', 'show_times.movie_id')
            ->join('halls', 'halls.id', '=', 'show_times.hall_id')
            ->get([
                'show_times.start_time',
                'tickets.cost',
                'tickets.seat_places',
                'movies.name AS movie_name',
                'halls.name AS hall_name',
                'tickets.start_date'
            ]);

//        SELECT movies.name, show_times.start_time, tickets.seat_places, tickets.start_date,
//            halls.name
//        FROM show_times, movies, tickets, halls
//        WHERE tickets.ticket_unique_id=$ID
//        AND show_times.id = tickets.showtime_id
//        AND show_times.movie_id = movies.id
//        AND show_times.hall_id = halls.id;
    }

    public function qrcode($id)
    {
        if (!Tickets::query()->where('ticket_unique_id', $id)->first()) {
            return response()->json([
                'message' => 'Your request invalid'
            ], 400);
        }
        return QrCode::size(180)->generate('http://localhost:3000/ticket?uniq_id=' . $id);
    }

    public function destroy($id)
    {
//        return Tickets::destroy($id);
    }
}
