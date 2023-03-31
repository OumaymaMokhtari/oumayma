<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'title_ar', 'body', 'body_ar', 'image', 'date'];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
