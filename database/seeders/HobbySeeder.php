<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Hobby::create([
            'name_en' => 'Fishing',
            'name_id' => 'Memancing',
        ]);

        //2
        Hobby::create([
            'name_en' => 'Cooking',
            'name_id' => 'Memasak',
        ]);

        //3
        Hobby::create([
            'name_en' => 'Photography',
            'name_id' => 'Fotografi',
        ]);

        //4
        Hobby::create([
            'name_en' => 'Singing',
            'name_id' => 'Menyanyi',
        ]);

        //5
        Hobby::create([
            'name_en' => 'Traveling',
            'name_id' => 'Jalan-jalan',
        ]);

        //6
        Hobby::create([
            'name_en' => 'Reading',
            'name_id' => 'Membaca',
        ]);

        //7
        Hobby::create([
            'name_en' => 'Writing',
            'name_id' => 'Menulis',
        ]);

        //8
        Hobby::create([
            'name_en' => 'Watching',
            'name_id' => 'Menonton',
        ]);

        //9
        Hobby::create([
            'name_en' => 'Playing Game',
            'name_id' => 'Bermain Game',
        ]);

        //10
        Hobby::create([
            'name_en' => 'Playing Music',
            'name_id' => 'Bermain Musik',
        ]);

        //11
        Hobby::create([
            'name_en' => 'Swimming',
            'name_id' => 'Berenang',
        ]);

        //12
        Hobby::create([
            'name_en' => 'Coding',
            'name_id' => 'Membuat Aplikasi',
        ]);

        //13
        Hobby::create([
            'name_en' => 'Dancing',
            'name_id' => 'Menari',
        ]);

        //14
        Hobby::create([
            'name_en' => 'Diving',
            'name_id' => 'Menyelam',
        ]);

        //15
        Hobby::create([
            'name_en' => 'Drawing',
            'name_id' => 'Menggambar',
        ]);

        //16
        Hobby::create([
            'name_en' => 'Sports',
            'name_id' => 'Olahraga',
        ]);

        //17
        Hobby::create([
            'name_en' => 'Gardening',
            'name_id' => 'Berkebun',
        ]);

        //18
        Hobby::create([
            'name_en' => 'Video Editing',
            'name_id' => 'Mengedit Video',
        ]);

        //19
        Hobby::create([
            'name_en' => 'Handcrafting',
            'name_id' => 'Membuat Kerajinan',
        ]);

        //20
        Hobby::create([
            'name_en' => 'Knitting',
            'name_id' => 'Merajut',
        ]);

        //21
        Hobby::create([
            'name_en' => 'Chess',
            'name_id' => 'Bermain Catur',
        ]);

        //22
        Hobby::create([
            'name_en' => 'Card Games',
            'name_id' => 'Bermain Kartu',
        ]);

        //23
        Hobby::create([
            'name_en' => 'Collecting Things',
            'name_id' => 'Mengumpulkan Barang',
        ]);

        //24
        Hobby::create([
            'name_en' => 'Meditation',
            'name_id' => 'Meditasi',
        ]);

        //25
        Hobby::create([
            'name_en' => 'Study',
            'name_id' => 'Belajar',
        ]);

        //26
        Hobby::create([
            'name_en' => 'Yoga',
            'name_id' => 'Yoga',
        ]);
    }
}
