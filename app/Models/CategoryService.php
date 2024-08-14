<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;
    protected $table = 'service_categories';

    protected $fillable = [
        'name',
        'status',
        'cover',
        'description'
    ];
    public function services()
    {
        return $this->hasMany(Service::class, 'service_category');
    }
}
