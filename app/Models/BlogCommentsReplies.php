<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentsReplies extends Model
{
    use HasFactory;
    public $fillable = [
        'comment_id',
        'name',
        'comment',
    ];
    public function blogComments()
    {
        return $this->belongsTo(BlogComments::class, 'comment_id');
    }
}
