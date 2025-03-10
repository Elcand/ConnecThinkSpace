<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studios = [
            [
                'name_labs'     => 'NineDragonLabs',
                'slug'          => 'nine-dragon-labs',
                'description'   => 'NineDragonLabs is a cutting-edge studio specializing in innovative virtual reality and augmented reality applications.',
                'image'         => 'lab.jpeg',
            ],
            [
                'name_labs'     => 'NaTech',
                'slug'          => 'na-tech',
                'description'   => 'NaTech is a cutting-edge studio specializing in virtual reality and augmented reality applications',
                'image'         => 'lab.jpeg',
            ],
        ];

        foreach ($studios as $studio) {
            DB::table('studios')->insert([
                'name_labs'     => $studio['name_labs'],
                'slug'          => $studio['slug'],
                'description'   => $studio['description'],
                'image'         => $studio['image'],
            ]);
        }
    }
}
