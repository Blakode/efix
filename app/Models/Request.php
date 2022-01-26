<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_url', 'location', 'price', 'user_id']; 


    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function bid()
    {
        return $this->hasMany(Bid::class); 
    }

}
