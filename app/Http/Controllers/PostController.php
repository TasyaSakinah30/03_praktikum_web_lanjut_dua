<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    $data = [
        [
            'title' => 'Belajar-1',
            'slug' => 'Belajar-1',
            'content' => 'Belajar laravel itu menyenangkan 1',
            'draft' => 0
        ],
        [
            'title' => 'Belajar-2',
            'slug' => 'Belajar-2',
            'content' => 'Belajar laravel itu menyenangkan 2',
            'draft' => 0
        ]
        ];
    DB::table('post')->insert($data);
}
