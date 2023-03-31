<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'title_ar', 'body', 'body_ar', 'image', 'date'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
