<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecordsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'edad' => $this->edad,
            'sexo' => $this->sexo,
            'nacimiento' => $this->nacimiento,
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'correo' => $this->correo,
            'created_ad' => $this->created_at->format('d-m-Y'),
            'updated_ad' => $this->updated_at->format('d-m-Y')

        ];
    }
}
