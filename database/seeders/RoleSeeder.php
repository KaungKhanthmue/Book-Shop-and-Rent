<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'slug' => 'Admin'
        ]);
        Role::create([
            'name' => 'contributor',
            'slug' => 'Contibutor'
        ]);
        Role::create([
            'name' => 'user',
            'slug' => 'User'
        ]);
        Role::create([
            'name' => 'freeze',
            'slug' => 'freeze'
        ]);
    }
}
