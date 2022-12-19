<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;


class UsersDailyTrackingPath extends Model
{
    use HasFactory,SpatialTrait;

    protected $guarded = ['id'];
    public $timestamps = false;
    // protected $casts = [
    //     'path' => LineString::class,
    // ];

}
