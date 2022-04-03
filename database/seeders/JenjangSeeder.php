<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjangs')->insert([
            'nama' => 'SD',
            'slug' => 'sd'
        ]);
        DB::table('jenjangs')->insert([
            'nama' => 'SMP',
            'slug' => 'smp'
        ]);
        DB::table('jenjangs')->insert([
            'nama' => 'SMA',
            'slug' => 'sma'
        ]);
    }
}
