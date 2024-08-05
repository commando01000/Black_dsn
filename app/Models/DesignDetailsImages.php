<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignDetailsImages extends Model
{
    use HasFactory;
    public $fillable = [
        'image', 'design_id'
    ];
    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
