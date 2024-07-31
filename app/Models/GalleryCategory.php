<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GalleryCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'gallery_categories';

    protected $fillable = [
        'name',
        'status',
    ];
    public $translatable = ['name'];
}
