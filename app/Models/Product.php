<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_uz',
        'image',
        'preview_en',
        'preview_ru',
        'preview_uz',
        'description_en',
        'description_ru',
        'description_uz',
        'model',
        'prod',
    ];
}
