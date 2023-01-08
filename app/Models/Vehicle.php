<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'license_plate',
        'color',
        'model',
        'user_id',
    ];

    public function driver(): HasOneThrough
    {
        return $this->hasOneThrough(Driver::class, DriverVehicle::class);
    }
}
