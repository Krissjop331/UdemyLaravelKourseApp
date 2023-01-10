<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'thumbnail',
        'slug'
    ];

    // 1 ко многим
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // 1 к одному
    public function state() {
        return $this->hasOne(State::class);
    }

    // многие ко многим
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
