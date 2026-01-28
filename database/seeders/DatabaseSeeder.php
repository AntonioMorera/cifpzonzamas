<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Juan Rafael',
            'email' => 'juan_curbelo@cifpzonzamas.es',
            'password' => Hash::make('2daw.pass'),
        ]);



        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);

        $createPost = Permission::create(['name' => 'create post']);
        $editPost = Permission::create(['name' => 'edit post']);
        $deletePost = Permission::create(['name' => 'delete post']);

        $admin->givePermissionTo($createPost, $editPost, $deletePost);
        $editor->givePermissionTo($editPost);


        $user = User::find(2);
        $user->assignRole('admin');

    }
}
