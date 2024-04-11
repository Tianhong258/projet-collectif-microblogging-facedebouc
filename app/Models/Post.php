<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======

    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> 8ffa8d33408b6a1d9ea01eb2da40fa9604acd591
}
