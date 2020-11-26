<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserPost;
use App\Models\User;
use App\Models\Message;

class Location extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function UserPost()
    {
        return $this->belongTo(UserPost::class);
    }
}
