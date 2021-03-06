<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class RolesAndParmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // USER MODEL
        $userPermission1 = Permission::create(['name' => 'create:user', 'description' => 'create user']);
        $userPermission2 = Permission::create(['name' => 'read:user', 'description' => 'read user']);
        $userPermission3 = Permission::create(['name' => 'update:user', 'description' => 'update user']);
        $userPermission4 = Permission::create(['name' => 'delete:user', 'description' => 'delete user']);

        // ROLE MODL
        $rolePermission1 = Permission::create(['name' => 'create:role', 'description' => 'create role']);
        $rolePermission2 = Permission::create(['name' => 'read:role', 'description' => 'read role']);
        $rolePermission3 = Permission::create(['name' => 'update:role', 'description' => 'update role']);
        $rolePermission4 = Permission::create(['name' => 'delete:role', 'description' => 'delete role']);

        //Permission MODEL
        $Permission1 = Permission::create(['name' => 'create:Permission', 'description' => 'create Permission']);
        $Permission2 = Permission::create(['name' => 'read:Permission', 'description' => 'read Permission']);
        $Permission3 = Permission::create(['name' => 'update:Permission', 'description' => 'update Permission']);
        $Permission4 = Permission::create(['name' => 'delete:Permission', 'description' => 'delete Permission']);

        //ADMIN MODEL
        $adminPermission1 = Permission::create(['name' => 'read:admin', 'description' => 'read admin']);

        $adminPermission2 = Permission::create(['name' => 'update:admin', 'description' => 'update admin']);

        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $developerRole = Role::create(['name' => 'developer']);
        $userRole = Role::create(['name' => 'user']);

        $superAdminRole->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $Permission1,
            $Permission2,
            $Permission3,
            $Permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);

        $adminRole->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $Permission1,
            $Permission2,
            $Permission3,
            $Permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);

        $moderatorRole->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $Permission2,
            $adminPermission1,
        ]);

        $developerRole->syncPermissions([
            $adminPermission1
        ]);

        $superAdmin = User::create([
            'name' => 'super admin',
            'is_admin' => 1,
            'email' => 'super@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $moderator = User::create([
            'name' => 'moderator',
            'is_admin' => 1,
            'email' => 'moderator@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $developer =User::create([
            'name' => 'developer',
            'is_admin' => 1,
            'email' => 'developer@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $user =User::create([
            'name' => 'test',
            'is_admin' => 0,
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $superAdmin->syncRoles([$superAdminRole])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $Permission1,
            $Permission2,
            $Permission3,
            $Permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);

        $admin->syncRoles([$adminRole])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $Permission1,
            $Permission2,
            $Permission3,
            $Permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);

        $moderator->syncRoles([$moderatorRole])->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $adminPermission1,
        ]);

        $developer->syncRoles([$developerRole])->syncPermissions([
            $adminPermission1
        ]);

        $user->syncRoles([$userRole]);
    }
}
