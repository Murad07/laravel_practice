<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name'=>Str::random(5),
            'address'=>Str::random(5),
            'age'=>Str::random(5),
            'email'=>Str::random(5).'@gmail.com'
        ]);
    }
}
