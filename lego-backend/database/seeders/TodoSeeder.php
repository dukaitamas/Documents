<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Todo::factory(10)->create(); //10 fake users added to the database
        \App\Models\Todo::factory(2)->unverified()->create();  //2 fake users added to the database
        // C:\Users\tomi2\l10-task-list\database\factories\UserFactory.php  public function unverified(): static
        //


    }
}
