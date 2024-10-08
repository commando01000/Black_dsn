<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'questions',
        'answer',
        'order',
    ];

    public $translatable = [
        'questions',
        'answer',
    ];
}
