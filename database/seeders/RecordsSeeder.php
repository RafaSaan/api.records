<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([

            [

                "nombre"=> "Rafa",
                "apellidos"=> "Sanchez",
                "edad"=> 20,
                "sexo"=> "Hombre",
                "nacimiento"=> "2001/09/21",
                "direccion"=> "Ahualtepec, CDMX",
                "celular"=> "5568002742",
                "correo"=> "rafasanche7@gmail.com"
                
                
            ]

        ]);
    }
}
