<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateHallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hall::create([
            'name' => 'Зал 1',
            'rows' => 8,
            'seats_on_row' => 10,
            'price' => 150,
            'vip_price' => 300,
            'seats_table' => '[{"index":1,"type":0},{"index":2,"type":0},{"index":3,"type":0},{"index":4,"type":0},{"index":5,"type":0},{"index":6,"type":0},{"index":7,"type":0},{"index":8,"type":0},{"index":9,"type":0},{"index":10,"type":0},{"index":11,"type":0},{"index":12,"type":0},{"index":13,"type":0},{"index":14,"type":1},{"index":15,"type":1},{"index":16,"type":1},{"index":17,"type":1},{"index":18,"type":0},{"index":19,"type":0},{"index":20,"type":0},{"index":21,"type":0},{"index":22,"type":0},{"index":23,"type":0},{"index":24,"type":1},{"index":25,"type":1},{"index":26,"type":1},{"index":27,"type":1},{"index":28,"type":0},{"index":29,"type":0},{"index":30,"type":0},{"index":31,"type":0},{"index":32,"type":0},{"index":33,"type":0},{"index":34,"type":1},{"index":35,"type":1},{"index":36,"type":1},{"index":37,"type":1},{"index":38,"type":0},{"index":39,"type":0},{"index":40,"type":0},{"index":41,"type":0},{"index":42,"type":0},{"index":43,"type":0},{"index":44,"type":1},{"index":45,"type":1},{"index":46,"type":1},{"index":47,"type":1},{"index":48,"type":0},{"index":49,"type":0},{"index":50,"type":0},{"index":51,"type":0},{"index":52,"type":0},{"index":53,"type":0},{"index":54,"type":1},{"index":55,"type":1},{"index":56,"type":1},{"index":57,"type":1},{"index":58,"type":0},{"index":59,"type":0},{"index":60,"type":0},{"index":61,"type":0},{"index":62,"type":0},{"index":63,"type":0},{"index":64,"type":1},{"index":65,"type":1},{"index":66,"type":1},{"index":67,"type":1},{"index":68,"type":0},{"index":69,"type":0},{"index":70,"type":0},{"index":71,"type":0},{"index":72,"type":0},{"index":73,"type":0},{"index":74,"type":0},{"index":75,"type":2},{"index":76,"type":2},{"index":77,"type":2},{"index":78,"type":0},{"index":79,"type":0},{"index":80,"type":0}]',
            'is_available' => 1,
        ]);

        Hall::create([
            'name' => 'Зал 2',
            'rows' => 8,
            'seats_on_row' => 10,
            'price' => 150,
            'vip_price' => 300,
            'seats_table' => '[{"index":1,"type":0},{"index":2,"type":0},{"index":3,"type":0},{"index":4,"type":0},{"index":5,"type":0},{"index":6,"type":0},{"index":7,"type":0},{"index":8,"type":0},{"index":9,"type":0},{"index":10,"type":0},{"index":11,"type":0},{"index":12,"type":0},{"index":13,"type":0},{"index":14,"type":1},{"index":15,"type":1},{"index":16,"type":1},{"index":17,"type":1},{"index":18,"type":0},{"index":19,"type":0},{"index":20,"type":0},{"index":21,"type":0},{"index":22,"type":0},{"index":23,"type":0},{"index":24,"type":1},{"index":25,"type":1},{"index":26,"type":1},{"index":27,"type":1},{"index":28,"type":0},{"index":29,"type":0},{"index":30,"type":0},{"index":31,"type":0},{"index":32,"type":0},{"index":33,"type":0},{"index":34,"type":1},{"index":35,"type":1},{"index":36,"type":1},{"index":37,"type":1},{"index":38,"type":0},{"index":39,"type":0},{"index":40,"type":0},{"index":41,"type":0},{"index":42,"type":0},{"index":43,"type":0},{"index":44,"type":1},{"index":45,"type":1},{"index":46,"type":1},{"index":47,"type":1},{"index":48,"type":0},{"index":49,"type":0},{"index":50,"type":0},{"index":51,"type":0},{"index":52,"type":0},{"index":53,"type":0},{"index":54,"type":1},{"index":55,"type":1},{"index":56,"type":1},{"index":57,"type":1},{"index":58,"type":0},{"index":59,"type":0},{"index":60,"type":0},{"index":61,"type":0},{"index":62,"type":0},{"index":63,"type":0},{"index":64,"type":1},{"index":65,"type":1},{"index":66,"type":1},{"index":67,"type":1},{"index":68,"type":0},{"index":69,"type":0},{"index":70,"type":0},{"index":71,"type":0},{"index":72,"type":0},{"index":73,"type":0},{"index":74,"type":0},{"index":75,"type":2},{"index":76,"type":2},{"index":77,"type":2},{"index":78,"type":0},{"index":79,"type":0},{"index":80,"type":0}]',
            'is_available' => 1,
        ]);
    }
}
