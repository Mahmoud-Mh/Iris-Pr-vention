<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Method to increment likes
    public function like()
    {
        $this->increment('likes');
    }

    // Optional: Method to decrement likes
    public function unlike()
    {
        if ($this->likes > 0) {
            $this->decrement('likes');
        }
    }
}
