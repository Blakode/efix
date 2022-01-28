<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'client_status', 'artisan_status','user_id', 'request_id']; 

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
