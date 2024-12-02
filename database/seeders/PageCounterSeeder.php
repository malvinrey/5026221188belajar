<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PageCounterSeeder extends Seeder
{
    public function run()
    {
        DB::table('pagecounter')->insert([
            'jumlah' => 0,
        ]);
    }
}
