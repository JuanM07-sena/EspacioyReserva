<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);


        User::create([
            'name'=>'Juan Marin',
            'email'=>'juanmsena07@gmail.com',
            'password'=>bcrypt('123456')
        ])->assignRole('vendedor');


        
        User::create([
            'name'=>'David Villanueva',
            'email'=>'jm3555124@gmail.com',
            'password'=>bcrypt('654321')
        ])->assignRole('admin');

            User::factory(15)->create();

    }
}
