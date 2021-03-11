<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'image' => 'Barang01.jpg',
            'nama_barang' => 'Sepatu',
            'jenis_barang' => 'Perlengkapan Sekolah',
            'harga' => '200000',
        ]);
   
    }
}
