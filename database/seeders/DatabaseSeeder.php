<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage notes']);
        $role->givePermissionTo($permission);

        User::factory()
            ->create([
                'name' => 'User Admin',
                'email' => 'admin@mail.com',
            ])
            ->assignRole($role);
    }
}
