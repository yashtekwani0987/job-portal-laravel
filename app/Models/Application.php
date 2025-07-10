<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public function job(){
        return $this->belongTo(Job::class);
    }
    public function user(){
        return $this->belongTo(User::class);
    }
}
