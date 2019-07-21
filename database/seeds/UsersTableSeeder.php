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
            "name" => "Raj C",
            "email" => "rajc@test.io",
            "contact" => "1111111111",
            "address" => "Kandivali West",
            "pincode" => "400067",
            "is_verified" => "1",
            "role" => "1",
            "password" => bcrypt("secret")
        ]);
        DB::table('users')->insert([
                "name" => "Stevert L",
                "email" => "stevertl@test.io",
                "contact" => "2222222222",
                "address" => "Poiser Depot",
                "pincode" => "400067",
                "is_verified" => "1",
                "role" => "2",
                "password" => bcrypt("secret")
            ]);
        DB::table('users')->insert([
            "name" => "Pradyumn G",
            "email" => "pradyumng@test.io",
            "contact" => "3333333333",
            "address" => "Saibaba Nagar",
            "pincode" => "400067",
            "is_verified" => "1",
            "role" => "3",
            "password" => bcrypt("secret")
        ]
        );DB::table('users')->insert([
        "name" => "Roma B",
        "email" => "romab@test.io",
        "contact" => "4444444444",
        "address" => "Mahavir Nagar",
        "pincode" => "400067",
        "is_verified" => "1",
        "role" => "4",
        "password" => bcrypt("secret")
    ]
        );DB::table('users')->insert([
            "name" => "Namarata",
            "email" => "namarata@test.io",
            "contact" => "5555555555",
            "address" => "Charkop",
            "pincode" => "400067",
            "is_verified" => "1",
            "role" => "5",
            "password" => bcrypt("secret")
        ]
        );

        DB::table('videos')->insert([
            'url' => "https://www.youtube.com/embed/Zch2QXfBqV4?controls=0",
            'tags' => "setup, fishnet, tutorial",
            'language' => 'bengali',
            'expert_id' => 2
        ]);
        DB::table('videos')->insert([
            'url' => "https://www.youtube.com/embed/n0svuurLibQ?controls=0",
            'tags' => "fish, fresh, water, freshwater",
            'language' => 'hindi',
            'expert_id' => 2
        ]);
        DB::table('videos')->insert([
            'url' => "https://www.youtube.com/embed/tgbNymZ7vqY?controls=0",
            'tags' => "fish, salt, water, saltwater",
            'language' => 'gujarati',
            'expert_id' => 2
        ]);

        DB::table('products')->insert([
            'vendor_id' => 4,
            'name' => 'Bait',
            'text' => 'Lorem Ipsum',
            'tags' => 'bait, fishing',
            'cost' => '50'
        ]);
        DB::table('products')->insert([
            'vendor_id' => 4,
            'name' => 'Hooks',
            'text' => 'Lorem Ipsum',
            'tags' => 'hooks, fishing',
            'cost' => '100'
        ]);
        DB::table('products')->insert([
            'vendor_id' => 4,
            'name' => 'Fish Net',
            'text' => 'Lorem Ipsum',
            'tags' => 'fishnet, fishing',
            'cost' => '300',

        ]);

        DB::table('farmer_products')->insert([
            'farmer_id' => 3,
            'fishname' => 'Carp',
            'text' => 'Lorem Ipsum',
            'tags' => 'fish, carp, common',
            'cost' => '100'
        ]);
        DB::table('farmer_products')->insert([
            'farmer_id' => 3,
            'fishname' => 'Guppy',
            'text' => 'Lorem Ipsum',
            'tags' => 'guppy, fish',
            'cost' => '50'
        ]);
        DB::table('farmer_products')->insert([
            'farmer_id' => 3,
            'fishname' => 'Goldfish',
            'text' => 'Lorem Ipsum',
            'tags' => 'fish, gold, goldfish',
            'cost' => '300'
        ]);
    }
}
#n0svuurLibQ
#Zch2QXfBqV4