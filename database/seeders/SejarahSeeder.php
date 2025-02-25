<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert([
            'tahunpemilu' => '',
            'jumlahpartai' => '',
            'totalsuara' => '',
            'suaradimenangkan' => '',
            'presiden' => '',
            'wakilpresiden' => '',
            'partai' => '',
        ]);
    }
}
