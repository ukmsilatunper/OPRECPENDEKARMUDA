<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;
use App\Models\Daftar;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('admin123')
        ]);
        Prodi::create([
            'prodi' => "Pendidikan Bahasa Inggris", 
        ]);
        Prodi::create([
            'prodi' => "Pendidikan Guru dan Sekolah Dasar", 
        ]);
        Prodi::create([
            'prodi' => "Manajemen", 
        ]);
        Prodi::create([
            'prodi' => "Akuntansi", 
        ]);
        Prodi::create([
            'prodi' => "Teknik Informatika", 
        ]);
        Prodi::create([
            'prodi' => "Teknik Sipil", 
        ]);
        Prodi::create([
            'prodi' => "Farmasi", 
        ]);
        Prodi::create([
            'prodi' => "Agribisnis", 
        ]);
        Prodi::create([
            'prodi' => "Agroteknologi", 
        ]);
        Prodi::create([
            'prodi' => "Peternakan", 
        ]);

        Daftar::create([
            'name' => "Rifal",
            'username' => 'ifal',
            'email' => 'ifal@gmail.com',
            'nohp' => '087568428724',
            'prodi_id' => 2,
            'motiv' => 'hjagsfhjg',
            'perguruan' => 'hjkagdfhjgajhf'
        ]);
    }
}
