<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password')
        ]);
        $role = Role::findById(1);
        $user->assignRole($role->name);
    }
}
