<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "John Mayler",
            "gender" => "Male",
            "email" => "johnmayler@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289613465413",
            "dob" => '1984-06-28',
            "registration_price" => 125000,
            "coin" => 100,
            "instagram" => "http://www.instagram.com/john_mayler",
            "image" => "user-1.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Jenny Perry O",
            "gender" => "Female",
            "email" => "jenny.perry.o@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "628961348810",
            "dob" => '1999-04-21',
            "registration_price" => 120100,
            "coin" => 160,
            "instagram" => "http://www.instagram.com/jenny_p_o_",
            "image" => "user-2.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Maria Zelensky",
            "gender" => "Female",
            "email" => "mariazelensky@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289613457800",
            "dob" => '2000-09-28',
            "registration_price" => 110400,
            "coin" => 170,
            "instagram" => "http://www.instagram.com/maria_zelensky",
            "image" => "user-3.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Frederic Setievi",
            "gender" => "Male",
            "email" => "fredericsetievi@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289613468804",
            "dob" => '2002-08-06',
            "registration_price" => 100000,
            "coin" => 200,
            "instagram" => "http://www.instagram.com/frederic_s_",
            "image" => "user-4.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Irene S",
            "gender" => "Female",
            "email" => "irene@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289613401354",
            "dob" => '2001-10-13',
            "registration_price" => 116000,
            "coin" => 50,
            "instagram" => "http://www.instagram.com/irene_s",
            "image" => "user-5.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Ricardo Emanuel",
            "gender" => "Male",
            "email" => "ricardo.emanuel@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289613401123",
            "dob" => '1989-12-27',
            "registration_price" => 118610,
            "coin" => 80,
            "instagram" => "http://www.instagram.com/ricard_e_",
            "image" => "user-6.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Paula Wee",
            "gender" => "Female",
            "email" => "paula.wee@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289703408799",
            "dob" => '1994-02-11',
            "registration_price" => 121210,
            "coin" => 98,
            "instagram" => "http://www.instagram.com/paula_wee",
            "image" => "user-7.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Sita lim",
            "gender" => "Female",
            "email" => "sita.lim@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289703407614",
            "dob" => '1987-08-10',
            "registration_price" => 121321,
            "coin" => 70,
            "instagram" => "http://www.instagram.com/sita_lim",
            "image" => "user-8.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Evan max",
            "gender" => "Male",
            "email" => "evanmax@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289709878799",
            "dob" => '1992-10-13',
            "registration_price" => 123210,
            "coin" => 65,
            "instagram" => "http://www.instagram.com/max_evan",
            "image" => "user-9.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Maxi fernando",
            "gender" => "Male",
            "email" => "maxifernando@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289709814563",
            "dob" => '1992-12-13',
            "registration_price" => 110213,
            "coin" => 130,
            "instagram" => "http://www.instagram.com/fernandomax",
            "image" => "user-10.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Andrew Colin",
            "gender" => "Male",
            "email" => "andrewcolin@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289732578799",
            "dob" => '2000-11-05',
            "registration_price" => 119640,
            "coin" => 90,
            "instagram" => "http://www.instagram.com/andrewww",
            "image" => "user-11.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Sendi effendi",
            "gender" => "Male",
            "email" => "sendieffendi@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289787353999",
            "dob" => '2001-06-21',
            "registration_price" => 120710,
            "coin" => 44,
            "instagram" => "http://www.instagram.com/effendisendi",
            "image" => "user-12.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Yusak andani",
            "gender" => "Male",
            "email" => "andaniyusak@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289732786145",
            "dob" => '2002-04-29',
            "registration_price" => 102657,
            "coin" => 89,
            "instagram" => "http://www.instagram.com/yusak_anda",
            "image" => "user-13.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);

        User::create([
            "name" => "Rudi lang",
            "gender" => "Male",
            "email" => "rudilang@gmail.com",
            "password" => bcrypt("password"),
            "phone" => "6289709972591",
            "dob" => '1996-06-30',
            "registration_price" => 109900,
            "coin" => 92,
            "instagram" => "http://www.instagram.com/rudii_lang",
            "image" => "user-14.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "visible" => true,
        ]);
    }
}
