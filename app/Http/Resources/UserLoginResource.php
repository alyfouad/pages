<?php

namespace App\Http\Resources;

use App\Http\Resources\GeneralResources\Permissions\PermissionResource;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserLoginResource extends JsonResource
{

    public static $wrap = 'user';
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status' => true,
            'id' => $this->id.$this->name,
            'name' => $this->name,
            'email' => $this->email,
            'expiresIn' => strtotime(Carbon::now()->addDays(100)),
        ];
    }
}
