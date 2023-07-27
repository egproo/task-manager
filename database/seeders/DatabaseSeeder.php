<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

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
        User::create(['name' => 'Abhishek Kumar', 'email' => 'admin@calsob.com', 'password' => 'password']);
        Role::create(['name' => 'Admin', 'guard_name' => 'web', '_lft' => 1, '_rgt' => 2, 'parent_id' => NUll]);
        Permission::create(['name' => 'authentication', 'guard_name' => 'web']);
        DB::table('model_has_roles')->insert(['role_id' => 1,'model_type' => 'App\\Models\\User','model_id' => 1]);
        DB::table('role_has_permissions')->insert(['permission_id' => 1,'role_id' => 1]);





    }
}
