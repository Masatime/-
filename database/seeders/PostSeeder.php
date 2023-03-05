<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    public function run(){
        DB::table('items')->insert([
                'title' => '2020-03-03',
                'body' => 'ホームページ開設',
    ]);
    DB::table('posts')->insert([
                'title' => '2020-03-04',
                'body' => '読めるようになれば怖くない',
         ]);
    DB::table('posts')->insert([
                'title' => '2020-03-05',
                'body' => '読めるようになれば怖くない',
                
         ]);
    DB::table('posts')->insert([
                'title' => '2020-03-06',
                'body' => '読めるようになれば怖くない',
                
         ]);
    DB::table('posts')->insert([
                'title' => '2020-03-07',
                'body' => '読めるようになれば怖くない',
                
         ]);
    DB::table('posts')->insert([
                'title' => '2020-03-08',
                'body' => '読めるようになれば怖くない',
        ]);      
    }
}
