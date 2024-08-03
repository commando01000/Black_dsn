<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Design extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'cover',
        'description',
        'design_category',
    ];
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(DesignCategory::class, "design_category");
    }
    public function details()
    {
        return $this->hasMany(DesignDetails::class);
    }
}
