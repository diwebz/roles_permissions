<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Din1', 
            'email' => 'din1@diwebz.com',
            'password' => Hash::make('123456789')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Din2', 
            'email' => 'din2@diwebz.com',
            'password' => Hash::make('123456789')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Din3', 
            'email' => 'din3@diwebz.com',
            'password' => Hash::make('123456789')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
