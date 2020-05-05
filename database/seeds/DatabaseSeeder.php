<?php

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
        // Create user
        factory(App\User::class)->create();

        // Create permissions
        $this->call(PermissionsRoleTableSeeder::class);
    }
}
