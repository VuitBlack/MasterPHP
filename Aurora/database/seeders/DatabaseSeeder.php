<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // 1. Insertar Usuarios
        DB::table('users')->insert([
            ['role' => 'admin', 'name' => 'Admin', 'surname' => 'Admin', 'nick' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('1234'), 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'user', 'name' => 'Tony', 'surname' => 'Stark', 'nick' => 'Ironman', 'email' => 'ironman@gmail.com', 'password' => Hash::make('1234'), 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'user', 'name' => 'Steve', 'surname' => 'Rogers', 'nick' => 'CaptainAmerica', 'email' => 'captainamerica@gmail.com', 'password' => Hash::make('1234'), 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 2. Insertar Imágenes
        DB::table('images')->insert([
            ['user_id' => 1, 'image_path' => 'images/admin.jpg', 'description' => 'Admin profile picture', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 2, 'image_path' => 'images/ironman.jpg', 'description' => 'Ironman in action', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 3, 'image_path' => 'images/captainamerica.jpg', 'description' => 'Captain America ready for battle', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 3. Insertar Comentarios
        DB::table('comments')->insert([
            ['user_id' => 2, 'image_id' => 1, 'content' => 'Preciosa foto de perfil!', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 3, 'image_id' => 2, 'content' => 'Me encanta esta imagen de Ironman!', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'image_id' => 3, 'content' => 'Captain America estas increible!', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 4. Insertar Likes
        DB::table('likes')->insert([
            ['user_id' => 2, 'image_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 3, 'image_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'image_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 2, 'image_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 3, 'image_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'image_id' => 2, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}