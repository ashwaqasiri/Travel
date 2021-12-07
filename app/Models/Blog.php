<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\WithUuid;

class Blog extends Model
{
    use HasFactory;
    use WithUuid;

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'title',
        'img',
        'description',
        'city_id'
    ];

    // public function getKeyType()
    // {
    //     return 'string';
    // }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class)->latest();
    // }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id')->latest();
    }

}
