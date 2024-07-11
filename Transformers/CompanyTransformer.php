<?php

namespace Modules\Sass\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CompanyTransformer extends JsonResource
{

    /**
    * Transform the resource into an array.
    *
    * @param Request  $request
    * @return array
    */

    public function toArray($request): array
    {
        $data = [
            'id' => $this->when($this->id, $this->id),
            'name'=> $this->when($this->name, $this->name),
            'logo'=>$this->present()->gravatar(),
            'nit'=>$this->when($this->nit, $this->nit),
            'address'=>$this->when($this->address, $this->address),
            'email'=>$this->when($this->email, $this->email),
            'identification'=>$this->when($this->identification, $this->identification),
            'phone'=>$this->when($this->phone, $this->phone),
            'website'=>$this->when($this->website, $this->website),
            'type'=>$this->when($this->type, $this->type),
            'settings'=>$this->settings
        ];

        return $data;

    }
}
