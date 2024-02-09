<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_text',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'mete_keyword',
    ];
}
