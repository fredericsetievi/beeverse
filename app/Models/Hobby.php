<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    // Many To Many
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_avatars', 'hobby_id', 'user_id');
    }
}
