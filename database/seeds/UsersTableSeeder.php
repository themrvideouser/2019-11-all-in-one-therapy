<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
        //
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => Str::random(10),
                'password' => Str::random(10),
                'email' => Str::random(10),
            ]
        );

    }
}
