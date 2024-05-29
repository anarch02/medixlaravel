<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_phone',
        'second_phone',
        'footer_phone',
        'person_name',
        'tg_for_contact',
        'tg_chanel',
        'instagram',
        'instagram_qr',
        'facebook',
        'facebook_qr',
        'location',
        'address_en',
        'address_ru',
        'address_uz',
    ];
}
