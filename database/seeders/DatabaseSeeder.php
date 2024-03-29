<?php

namespace Database\Seeders;

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
        $this->call(RoleTablesSeeder::class);
        $this->call(UsersTablesSeeder::class);
        $this->call(RecipeSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
