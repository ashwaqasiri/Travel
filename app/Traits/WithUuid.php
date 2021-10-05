<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait WithUuid
{

    public static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Uuid::uuid6()->toString();
            }
        });
    }

    public function initializeHasUuid()
    {
        $this->incrementing = false;
        $this->keyType = 'string';
    }
}
