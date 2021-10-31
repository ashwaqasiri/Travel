<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

trait WithUuid
{
    public $incrementing = false;
    /**
     * Sets the UUID value for the primary key field.
     */
    protected function setUUID()
    {
        $this->id = preg_replace('/\./', '', uniqid('bpm', true));
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->{$model->getKeyName()} = Str::orderedUuid()->toString();
        });
    }

}
