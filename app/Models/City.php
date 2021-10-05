<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class city extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'region',
        'image'
    ];

    protected $casts = [
        'id' => 'string'
      ];

    public function blogs()
    {
        return $this->hasMany(Blog::class)->latest();
    }
}
