<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'superAdmin']);
        $user = User::create([
            'name' => 'Nofrian E. Putra',
            'email' => 'nofrianekap@admin.com',
            'password' => bcrypt('123Nofrian456')
        ]);
        $user->assignRole('superAdmin');
    }
}
