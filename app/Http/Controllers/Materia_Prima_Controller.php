<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia_Prima1;

class Materia_Prima_Controller extends Controller
{
    //
    public function index()
    {

        $materia_prima = Materia_Prima1::all(); 
        return response()->json($materia_prima);
    }

    
    public function create(Request $request)
    {
        
        Materia_Prima1::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($Primario_Id)
    {
       
        $materia_prima= Materia_Prima1::findOrFail($Primario_Id);
        
        return response()->json($materia_prima);
    }


    public function update(Request $request, $Primario_Id)
    {
        
        Materia_Prima1::findOrFail($Primario_Id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($Primario_Id)
    {
        Materia_Prima1::findOrFail($Primario_Id)->delete();
        return response()->json(['success' => true]);
    }
}
