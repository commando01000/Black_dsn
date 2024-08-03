<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignDetails extends Model
{
    use HasFactory;

    protected $fillable = ['design_id', 'advantage'];
    public $table = 'design_details';
    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
