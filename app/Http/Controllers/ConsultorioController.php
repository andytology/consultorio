<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultas;

class ConsultorioController extends Controller
{
    public function listConsulta()
    {
        $consultas = Consultas::all();
        return response()->json($consultas);
    }
    public function guardarConsulta(Request $request)
    {
       try{ $consulta = new Consultas();
        $consulta->nombre = $request->nombre;
        $consulta->email = $request->email;
        $consulta->telefono = $request->telefono;
        $consulta->mensaje = $request->mensaje;
        $consulta->motivo_consulta = $request->motivo_consulta;
        $consulta->fecha_consulta = $request->fecha_consulta;
        $consulta->estado = $request->estado;
        $consulta->save();
        return response()->json($consulta);
       } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
}
}

