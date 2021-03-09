<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'img' => 'images/service_01.jpg',
                'name' => 'Digital Currency',
                'description' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.',
            ],
            [
                'img' => 'images/service_02.jpg',
                'name' => 'Market Analysis',
                'description' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.',
            ],
            [
                'img' => 'images/service_03.jpg',
                'name' => 'Historical Data',
                'description' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.',
            ]
            ];
        DB::table('posts')->insert($data);
    }
}
