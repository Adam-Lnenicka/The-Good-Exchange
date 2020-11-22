<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    public function aUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_users_id', 'id');

    }
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_users_id', 'id');

    }

    public function UserPost()
    {
        return $this->belongsTo(UserPost::class, 'post_id', 'id');

        // carry id of the user_poster  & person replying to message 

    }

    
}
