<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'description', 'video_path', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

