<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'Tasya',
            'alamat' => 'Lumajang',
            'no_hp' => '081234567',
        ]);
    }
}
