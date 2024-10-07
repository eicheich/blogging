<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'category_id',
        'archived',
        'allow_interaction',
        'user_id'
    ];
}
