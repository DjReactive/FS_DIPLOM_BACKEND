<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function __invoke(UploadRequest $request)
    {

        if (!$request->file('file')) {
            return response()->json([
                'message' => 'You not uploaded file'
            ], 400);
        }
        $file = $request->file('file');

        $path = "app" . DIRECTORY_SEPARATOR . "images";
        $name = $file->hashName();
        $dateFolder = DIRECTORY_SEPARATOR . date("d") . date("m") . date("Y");

        Storage::put("images". $dateFolder, $file);
        Media::query()->create(
            attributes: [
                'name' => $name,
                'file_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
                'path' => $path . $dateFolder . DIRECTORY_SEPARATOR . $name,
//                'disk' => config('app.uploads.disk'),
                'file_hash' => hash_file(
                    'md5',
                    storage_path(
                        path: $path . $dateFolder . DIRECTORY_SEPARATOR . $name,
                    ),
                ),
                'collection' => $request->get('collection'),
                'size' => $file->getSize(),
            ],
        );
        return $name;
        //return redirect()->back();
    }
}
