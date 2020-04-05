<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'body'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'id');
    }
}