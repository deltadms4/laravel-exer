<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private static string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        Product::factory(30)->create();
        User::factory(5)->create();
        User::create([
            'name' => 'Delta',
            'email' => 'elt88633@gmail.com',
            'password' => static::$password ??= Hash::make('12345678'),
            'role' => 'admin',
        ]);

//        DB::table('users')->insert([
//            'name' => 'admin1',
//            'email' => 'admin@admin.com',
//            'password' => Hash::make('password'),
//            'role' => 'admin'
//        ]);
    }
}
