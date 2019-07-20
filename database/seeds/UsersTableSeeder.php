<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        "name" => "Raj Parekh",
        "email" => "raj.parekh07@gmail.com",
        "contact" => "8879170527",
        "address" => "abc",
        "pincode" => "400067",
        "is_verified" => "1",
        "role" => "1",
        "password" => bcrypt("secret")
        ]);
    }
}
