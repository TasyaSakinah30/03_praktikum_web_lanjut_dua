<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Khosy',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat_pegawai' => 'Surabaya',
            'no_hp_pegawai' => '0823456789',
        ]);
    }
}
