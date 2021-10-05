<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\WithUuid;

class blog extends Model
{
    use HasFactory;
    use WithUuid;

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'img',
        'description',
        'city_id'
    ];

    protected $casts = [
        'id' => 'string'
      ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
