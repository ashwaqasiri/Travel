<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\WithUuid;

class category extends Model
{
    use HasFactory;
    use WithUuid;

    protected $fillable = [
        'id',
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
