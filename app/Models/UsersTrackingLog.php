<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class UsersTrackingLog extends Model
{
    use HasFactory,SpatialTrait;

    protected $guarded = [];

    protected $spatialFields = [
        'coordinates',
    ];
}
