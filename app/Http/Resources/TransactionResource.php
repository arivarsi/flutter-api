<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return ['id'=>$this->id,
            'amount'=>number_format($this->amount/100,2),
            'transaction_date'=>$this->transactio_date->format('m/d/Y'),
            'description'=>$this->description,
            'created_at'=>$this->created_at,
            ];
    }
}
