<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            'nama_supplier' => 'Rachmah',
            'alamat_supplier' => 'Probolinggo',
            'no_hp_supplier' => '085123678',
            'jenis_kelamin_supplier' => 'Perempuan',
        ]);
    }
}
