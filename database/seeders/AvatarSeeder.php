<?php

namespace Database\Seeders;

use App\Models\Avatar;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Avatar::create([
            'image' => 'avatar-1.jpg',
            'price' => 500,
        ]);

        Avatar::create([
            'image' => 'avatar-2.jpg',
            'price' => 1500,
        ]);

        Avatar::create([
            'image' => 'avatar-3.jpg',
            'price' => 50,
        ]);

        Avatar::create([
            'image' => 'avatar-4.jpg',
            'price' => 57500,
        ]);

        Avatar::create([
            'image' => 'avatar-5.jpg',
            'price' => 8900,
        ]);

        Avatar::create([
            'image' => 'avatar-6.jpg',
            'price' => 100000,
        ]);

        Avatar::create([
            'image' => 'avatar-7.jpg',
            'price' => 3415,
        ]);

        Avatar::create([
            'image' => 'avatar-8.jpg',
            'price' => 100,
        ]);

        Avatar::create([
            'image' => 'avatar-9.jpg',
            'price' => 17500,
        ]);

        Avatar::create([
            'image' => 'avatar-10.jpg',
            'price' => 3900,
        ]);

        Avatar::create([
            'image' => 'avatar-11.jpg',
            'price' => 2910,
        ]);

        Avatar::create([
            'image' => 'avatar-12.jpg',
            'price' => 70000,
        ]);

        Avatar::create([
            'image' => 'avatar-13.jpg',
            'price' => 530,
        ]);

        Avatar::create([
            'image' => 'avatar-14.jpg',
            'price' => 145,
        ]);

        Avatar::create([
            'image' => 'avatar-15.jpg',
            'price' => 80,
        ]);

        Avatar::create([
            'image' => 'avatar-16.jpg',
            'price' => 1100,
        ]);

        Avatar::create([
            'image' => 'avatar-17.jpg',
            'price' => 1900,
        ]);

        Avatar::create([
            'image' => 'avatar-18.jpg',
            'price' => 7700,
        ]);

        Avatar::create([
            'image' => 'avatar-19.jpg',
            'price' => 9800,
        ]);

        Avatar::create([
            'image' => 'avatar-20.jpg',
            'price' => 43000,
        ]);

        Avatar::create([
            'image' => 'avatar-21.jpg',
            'price' => 9990,
        ]);

        Avatar::create([
            'image' => 'avatar-22.jpg',
            'price' => 31700,
        ]);

        Avatar::create([
            'image' => 'avatar-23.jpg',
            'price' => 200,
        ]);

        Avatar::create([
            'image' => 'avatar-24.jpg',
            'price' => 95,
        ]);

        Avatar::create([
            'image' => 'avatar-25.jpg',
            'price' => 750,
        ]);
    }
}
