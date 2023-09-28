<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーを挿入
        DB::table('users')->insert([
            'name' => '勝本宏樹',
            'email' => 'katsumoto.k@arsaga.jp',
            'password' => Hash::make('test1234'),
        ]);
    }
}
