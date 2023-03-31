<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
         $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
  
  
        // Listing::create([
        //     'title' => 'Laravel senior Developer',
        //     'tags' =>'laravel,javascript,NuxtJs',
        //     'company' => 'Acme Corp',
        //     'location' =>'Nairobi ,Kenya',
        //     'email' => 'info@acme.com',
        //      'website' => 'http://www.acme.com',
        //      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        //                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        //                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        //                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        //                      Excepteur sint occaecat cupidatat non proident,
        //                      sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Junoir Developer',
        //     'tags' =>'laravel,javascript,NextJs',
        //     'company' => 'Webber Corp',
        //     'location' =>'Nairobi ,Kenya',
        //     'email' => 'info@webber.com',
        //      'website' => 'http://www.webber.com',
        //      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        //                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        //                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        //                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        //                      Excepteur sint occaecat cupidatat non proident,
        //                      sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);
    }
}