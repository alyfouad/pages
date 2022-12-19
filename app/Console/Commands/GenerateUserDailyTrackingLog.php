<?php

namespace App\Console\Commands;

use App\Models\UsersDailyTrackingPath;
use App\Models\UsersTrackingLog;
use Illuminate\Console\Command;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;
use Grimzy\LaravelMysqlSpatial\Types\LineString;

class GenerateUserDailyTrackingLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GenerateUserDailyTrackingLog:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tracks = UsersTrackingLog::where('created_at','<',now()->format('Y-m-d'))->get()->groupBy('user_id');
        foreach ($tracks as $track) {
            $dailyTracks = $track->groupBy(fn($value) => $value->created_at->format('Y-m-d'));
            foreach ($dailyTracks as $date => $dailyTrack) {
                
                $points = $dailyTrack->map(function ($item) {
                    return new Point($item->lat, $item->lng);
                });

                $first = $points->first();
                $points = $points->all();
                $points[] = $first;
                UsersDailyTrackingPath::create([
                    'user_id' => $dailyTrack->first()->user_id,
                    'path' => new LineString($points),
                    'date' => $date,
                ]);
            }
        }
    }
}
