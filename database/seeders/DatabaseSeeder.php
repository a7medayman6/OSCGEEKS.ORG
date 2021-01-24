<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Committees;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // user::create([

        // ]);
        Committees::create([
                "name" => "Art",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "Web",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "Blender",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "CCC",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "English",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "Game",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
                "name" => "HR",
                "created_at" => date("Y-m-d h:i:sa")
             ]);     
        Committees::create([
                "name" => "Linux",
                "created_at" => date("Y-m-d h:i:sa")
             ]);
        Committees::create([
            "name" => "LR",
            "created_at" => date("Y-m-d h:i:sa")
         ]);
         Committees::create([
            "name" => "PR",
            "created_at" => date("Y-m-d h:i:sa")
        ]);
        Committees::create([
            "name" => "Project",
            "created_at" => date("Y-m-d h:i:sa")
        ]);
        User::create([
         "name" => "OSC_admin",
         "email" => "osc_admin@osc.com",
         'email_verified_at' => now(),
         "password" => "osc&admin",
         "created_at" => date("Y-m-d h:i:sa")
     ]);
       
    }
}
