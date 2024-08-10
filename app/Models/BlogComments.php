<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;
    public $fillable = [
        'blog_id',
        'name',
        'comment',
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
    public function replies()
    {
        return $this->hasMany(BlogCommentsReplies::class, 'comment_id');
    }
}
