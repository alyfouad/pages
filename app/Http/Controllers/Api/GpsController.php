<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\UsersTrackingLog;
use Illuminate\Http\Request;
use Grimzy\LaravelMysqlSpatial\Types\Point;

class GpsController extends Controller
{

    public function store(Request $request)
    {
        $user = auth('api')->user();
        UsersTrackingLog::create([
            'user_id' => $user->id,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'coordinates' => new Point($request->lat, $request->lng),
        ]);
    }
}