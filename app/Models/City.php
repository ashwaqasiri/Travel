<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\WithUuid;

class City extends Model
{
    use HasFactory;
    use WithUuid;
    
    public $incrementing = false;

    protected $fillable = [
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
