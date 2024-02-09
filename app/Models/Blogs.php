<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_description',
        'long_description',
        'comment',
        'meta_title',
        'meta_description',
        'mete_keyword',
    ];
}
