<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->admin()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('food')->insert([
            'name' => 'Sweet and Sour Fish',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 135000,
            'image' => 'Foto Sweet and Sour Fish.jpeg'
        ]);

        DB::table('food')->insert([
            'name' => 'General Tso\'s Chicken',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 80000,
            'image' => 'Foto General Tso Chicken.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Mongolian Beef',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 150000,
            'image' => 'Foto Mongolian Beef.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Mapo Tofu',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 70000,
            'image' => 'Foto Mapo Tofu.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Orange Chicken',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 90000,
            'image' => 'Foto Orange Chicken.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Beijing Beef',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Main Course',
            'price' => 140000,
            'image' => 'Foto Beijing Beef.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Black Tea',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 115000,
            'image' => 'Foto Black Tea.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Bubble Tea',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 90000,
            'image' => 'Foto Bubble Tea.jpeg'
        ]);

        DB::table('food')->insert([
            'name' => 'Chrysanthemum Tea',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 210000,
            'image' => 'Foto Chrysanthemum Tea.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Sour Plum Drink',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 235000,
            'image' => 'Foto Sour Plum Drink.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Green Tea',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 155000,
            'image' => 'Foto Green Tea.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Kombucha',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Beverages',
            'price' => 125000,
            'image' => 'Foto Kombucha.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Dragon\'s Beard Candy',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 205000,
            'image' => 'Foto Dragon Beard Candy.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Egg Tarts',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 135000,
            'image' => 'Foto Egg Tarts.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Eight-Treasure Eight Pudding',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 550000,
            'image' => 'Foto Eight-Treasure Rice Pudding.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Mooncake',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 350000,
            'image' => 'Foto Mooncake.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Red Bean Bun',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 150000,
            'image' => 'Foto Red Bean Bun.jpg'
        ]);

        DB::table('food')->insert([
            'name' => 'Tanghulu-Candied Fruit on A Stick',
            'brief_desc' => 'Lorem ipsum dolor sit amet.',
            'full_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero amet nobis tenetur accusantium sequi.',
            'category' => 'Dessert',
            'price' => 258000,
            'image' => 'Foto Tanghulu Candied Fruit on A Stick.jpg'
        ]);
    }
}
