<?php

namespace App\Traits;

use Carbon\Carbon;

trait TimestampSerializable
{
    protected function serializeDate(\DateTimeInterface $date)
    {
        return Carbon::instance($date)->format('Y-m-d h:i:s');
    }
}