<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $pointsStr="";
        foreach ($this->points as $point) {
            $pointsStr.=$point->name."-";
        }
        $pointsStr=mb_substr($pointsStr, 0, -1);
        return [
            'name' => $this->name,
            'points' => $pointsStr,
            'weight'=>$this->weight,
            'created_at'=>$this->created_at,
          ];
        //return parent::toArray($request);
    }
}
