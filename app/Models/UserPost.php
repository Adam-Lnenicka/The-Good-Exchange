<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class UserPost extends Model
{
    use HasFactory;


    protected $fillable = [
        'uploadedm_photo_path',
        'helpmate',
        'cost',
        'description',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function Message()
    {
        return $this->hasMany(Message::class );

    }
    
    public function Location()
    {
        return $this->belongsTo(Location::class,'locations_id' ,'id' );

    }
}
