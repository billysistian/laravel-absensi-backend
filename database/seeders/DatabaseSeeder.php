<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Billy Admin',
            'email' => 'billy@fic.com',
            'password' => Hash::make('12345678')
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. GOMEGA',
            'email' => 'fic@gomega.com',
            'address' => 'Jl. Pangeran Tirtayasa',
            'latitude' => '-5.413331',
            'longitude' => '105.320831',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
