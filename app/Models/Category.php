<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\WithUuid;

class Category extends Model
{
    use HasFactory;
    use WithUuid;

    public $incrementing = false;
    
    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'id' => 'string'
      ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
