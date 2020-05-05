<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create super Admin
         *
         */
        $this->createSuperAdmin();

        /**
         * Create Permissions
         *
         */
        $this->createPermissions();

    }

    public function createSuperAdmin()
    {
        $role = Role::create([
            'name' => 'admin'
        ]);

        $user = User::find(1); 
        $user->assignRole($role->id);
    }

    public function createPermissions()
    {
        $permissions = [
            // Roles
            [
                'name' => 'role.index',
                'title' => 'View Roles',
            ],
            [
                'name' => 'role.show',
                'title' => 'View Roles',
            ],
            [
                'name' => 'role.create',
                'title' => 'View Roles',
            ],
            [
                'name' => 'role.edit',
                'title' => 'View Roles',
            ],
            [
                'name' => 'role.destroy',
                'title' => 'View Roles',
            ],

            // Users
            [
                'name' => 'user.index',
                'title' => 'View Users',
            ],
            [
                'name' => 'user.show',
                'title' => 'View Users',
            ],
            [
                'name' => 'user.create',
                'title' => 'View Users',
            ],
            [
                'name' => 'user.edit',
                'title' => 'View Users',
            ],
            [
                'name' => 'user.destroy',
                'title' => 'View Users',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission['name'], 'title' => $permission['title']]);
        }
    }
}
