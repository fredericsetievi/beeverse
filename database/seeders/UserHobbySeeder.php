<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hobby;
use App\Models\UserHobby;
use Illuminate\Database\Seeder;

class UserHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = User::all();
        // $hobbies = Hobby::all();
        // foreach ($users as $user) {
        //     for ($i = 0; $i < rand(3, 6); $i++) {
        //         $user->hobbies()->attach($hobbies->random());
        //     }
        // }

        //1
        UserHobby::create([
            'user_id' => 1,
            'hobby_id' => 2,
        ]);

        UserHobby::create([
            'user_id' => 1,
            'hobby_id' => 7,
        ]);

        UserHobby::create([
            'user_id' => 1,
            'hobby_id' => 10,
        ]);

        UserHobby::create([
            'user_id' => 1,
            'hobby_id' => 24,
        ]);

        //2
        UserHobby::create([
            'user_id' => 2,
            'hobby_id' => 1,
        ]);

        UserHobby::create([
            'user_id' => 2,
            'hobby_id' => 13,
        ]);

        UserHobby::create([
            'user_id' => 2,
            'hobby_id' => 17,
        ]);

        UserHobby::create([
            'user_id' => 2,
            'hobby_id' => 9,
        ]);
        //3
        UserHobby::create([
            'user_id' => 3,
            'hobby_id' => 13,
        ]);

        UserHobby::create([
            'user_id' => 3,
            'hobby_id' => 11,
        ]);

        UserHobby::create([
            'user_id' => 3,
            'hobby_id' => 7,
        ]);

        UserHobby::create([
            'user_id' => 3,
            'hobby_id' => 4,
        ]);

        //4
        UserHobby::create([
            'user_id' => 4,
            'hobby_id' => 9,
        ]);

        UserHobby::create([
            'user_id' => 4,
            'hobby_id' => 11,
        ]);

        UserHobby::create([
            'user_id' => 4,
            'hobby_id' => 7,
        ]);
        UserHobby::create([
            'user_id' => 4,
            'hobby_id' => 17,
        ]);

        UserHobby::create([
            'user_id' => 4,
            'hobby_id' => 22,
        ]);

        //5
        UserHobby::create([
            'user_id' => 5,
            'hobby_id' => 7,
        ]);

        UserHobby::create([
            'user_id' => 5,
            'hobby_id' => 9,
        ]);

        UserHobby::create([
            'user_id' => 5,
            'hobby_id' => 11,
        ]);

        UserHobby::create([
            'user_id' => 5,
            'hobby_id' => 18,
        ]);

        //6
        UserHobby::create([
            'user_id' => 6,
            'hobby_id' => 18,
        ]);

        UserHobby::create([
            'user_id' => 6,
            'hobby_id' => 5,
        ]);

        UserHobby::create([
            'user_id' => 6,
            'hobby_id' => 23,
        ]);

        UserHobby::create([
            'user_id' => 6,
            'hobby_id' => 25,
        ]);

        //7 
        UserHobby::create([
            'user_id' => 7,
            'hobby_id' => 8,
        ]);

        UserHobby::create([
            'user_id' => 7,
            'hobby_id' => 12,
        ]);

        UserHobby::create([
            'user_id' => 7,
            'hobby_id' => 13,
        ]);
        UserHobby::create([
            'user_id' => 7,
            'hobby_id' => 16,
        ]);

        //8
        UserHobby::create([
            'user_id' => 8,
            'hobby_id' => 7,
        ]);

        UserHobby::create([
            'user_id' => 8,
            'hobby_id' => 6,
        ]);

        //9
        UserHobby::create([
            'user_id' => 9,
            'hobby_id' => 1,
        ]);

        UserHobby::create([
            'user_id' => 9,
            'hobby_id' => 10,
        ]);

        UserHobby::create([
            'user_id' => 9,
            'hobby_id' => 17,
        ]);

        //10
        UserHobby::create([
            'user_id' => 10,
            'hobby_id' => 1,
        ]);

        UserHobby::create([
            'user_id' => 10,
            'hobby_id' => 17,
        ]);

        UserHobby::create([
            'user_id' => 10,
            'hobby_id' => 5,
        ]);

        UserHobby::create([
            'user_id' => 10,
            'hobby_id' => 6,
        ]);

        //12
        UserHobby::create([
            'user_id' => 12,
            'hobby_id' => 2,
        ]);

        UserHobby::create([
            'user_id' => 12,
            'hobby_id' => 8,
        ]);

        UserHobby::create([
            'user_id' => 12,
            'hobby_id' => 17,
        ]);

        //13
        UserHobby::create([
            'user_id' => 13,
            'hobby_id' => 5,
        ]);

        UserHobby::create([
            'user_id' => 13,
            'hobby_id' => 9,
        ]);

        UserHobby::create([
            'user_id' => 13,
            'hobby_id' => 22,
        ]);

        //14
        UserHobby::create([
            'user_id' => 14,
            'hobby_id' => 8,
        ]);

        UserHobby::create([
            'user_id' => 14,
            'hobby_id' => 21,
        ]);

        UserHobby::create([
            'user_id' => 14,
            'hobby_id' => 16,
        ]);

        UserHobby::create([
            'user_id' => 14,
            'hobby_id' => 26,
        ]);
    }
}
