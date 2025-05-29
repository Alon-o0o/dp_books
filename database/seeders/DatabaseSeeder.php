<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            ['name' => 'Иван', 'email' => 'ivan@example.com', 'password' => bcrypt('password')],
            ['name' => 'Анна', 'email' => 'anna@example.com', 'password' => bcrypt('password')],
        ]);
    }
}
