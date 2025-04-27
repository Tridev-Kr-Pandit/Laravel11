<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=10; $i++){
            student::create([
                'Name'=> fake()->name(),
                'Email'=> fake()->Unique()->email(),
                'Age' => fake()->numberBetween(20,60),
                'Phone' => fake()->phoneNumber(),
                'Address' => fake()->address()
            ]);
        }
    }
}
