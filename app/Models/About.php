<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'years_in_market', // Количество лет на рынке
        'paragraph_ru', // Абзац (русский)
        'paragraph_uz', // Абзац (узбекский)
        'paragraph_en', // Абзац (английский)
        'indicator1_name_ru', // Название показателя 1 (русский)
        'indicator1_name_uz', // Название показателя 1 (узбекский)
        'indicator1_name_en', // Название показателя 1 (английский)
        'indicator1_value', // Цифра показателя 1
        'indicator2_name_ru', // Название показателя 2 (русский)
        'indicator2_name_uz', // Название показателя 2 (узбекский)
        'indicator2_name_en', // Название показателя 2 (английский)
        'indicator2_value', // Цифра показателя 2
        'title_ru', // Название (русский)
        'title_uz', // Название (узбекский)
        'title_en', // Название (английский)
        'icon', // Иконка (SVG, PNG синяя)
        'photo', // Фото
        'short_description_ru', // Краткое описание (русский)
        'short_description_uz', // Краткое описание (узбекский)
        'short_description_en', // Краткое описание (английский)
    ];
}
