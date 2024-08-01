<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];
    public function designs()
    {
        return $this->hasMany(Design::class, 'design_category');
    }
}
