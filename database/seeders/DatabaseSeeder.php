<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'email' => 'admin@gmail.com',
            'telepon' => '089670522489',
            'username' => 'tegar',
            'name' => 'tegar',
            'jenis_kelamin' => 'Laki-laki',
            'password' => 'password',
            'role' => 'user',
        ]);

        User::factory()->create([
            'email' => 'admin1@gmail.com',
            'telepon' => '089670522489',
            'username' => 'tegar1',
            'name' => 'tegar',
            'jenis_kelamin' => 'Laki-laki',
            'password' => 'password',
            'role' => 'admin',
        ]);

        Product::create([
            'nama' => 'Impresol',
            'kategori' => 'Pupuk',
            'deskripsi' => 'P',
            'harga' => '5000',
            'stok' => 20,
            'foto' => 'Impresol.png',
        ]);
    }
}
