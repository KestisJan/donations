<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'donation_goal',
        'donation_start',
        'post_like',
        'stories',
        'tags',
    ];
}
