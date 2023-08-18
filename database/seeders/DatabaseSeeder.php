<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            WorkspaceSeeder::class,
            TaskSeeder::class
        ]
        );
    }
}
