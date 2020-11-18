<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function Message()
    {
        return $this->hasMany(Message::class);

    }
}
