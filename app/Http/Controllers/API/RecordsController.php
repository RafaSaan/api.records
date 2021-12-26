<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecordRequest;
use App\Http\Resources\RecordsResource;
use App\Models\Record;


class RecordsController extends Controller

    
{
    public function index(){
        return RecordsResource::collection(Record::all());
    }


    public function store( RecordRequest $request){

        return(new RecordsResource(Record::create($request->all())))->additional(['msg'=>'Registro Exitoso']);


    }


    public function show(Record $record){
        return new RecordsResource($record);
    }


    public function update(RecordRequest $request , Record $record){
        $record->update($request->all());
        return response()->json([
            'msg'=> 'Registro editado correctamente',
            new RecordsResource(($record))
        ],202);
    }
    

    public function destroy(Record $record){
        $record->delete();
        return response()->json([
            'msg'=> 'Registro Eliminado',
            new RecordsResource(($record))
        ],202);
    }
}
