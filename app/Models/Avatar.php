<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    // Many to Many
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_avatars', 'avatar_id', 'user_id');
    }
}
