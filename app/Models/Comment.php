<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blog_id',
        'comment',
        'parent_id',
        'commentable_id',
        'commentable_type'
    ];

    protected $casts = [
        'id' => 'string'
      ];

    public static function boot()
      {
          parent::boot();
          
          static::creating(function ($model) {
              $model->id = Str::uuid();
          });
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class)->latest();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();  
    }
 
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}

