<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class AutosController extends Controller
{
    public function listAutos()
    {
        $autos = Autos::all(); // Obtiene todos los registros de la tabla autos
        return response()->json([
            'autos' => $autos,
            'status' => true
        ]);
    }

    public function guardarAuto(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'color' => 'required|string|max:255',
                'modelo' => 'required|integer',
                'tamano' => 'required|string|max:255',
                'numero_placa' => 'required|string|max:255|unique:autos,numero_placa',
                'precio' => 'required|numeric',
                'tipo' => 'required|string|in:deportivo,formal,viaje,familiar',
                'marca' => 'required|string|max:255',
                'modelo_nombre' => 'required|string|max:255',
            ]);

            $auto = Autos::create($validatedData);

            return response()->json([
                'mensaje' => 'Auto creado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al guardar el auto',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }

    public function buscarAuto($codigo_auto)
    {
        try {
            $auto = Autos::findOrFail($codigo_auto); // Busca el auto por su ID
            return response()->json([
                'auto_buscado' => $auto,
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Auto no encontrado',
                'error' => $e->getMessage(),
                'status' => false
            ], 404);
        }
    }

    public function actualizarAuto(Request $request, $codigo_auto)
    {
        try {
            $validatedData = $request->validate([
                'color' => 'string|max:255',
                'modelo' => 'integer',
                'tamano' => 'string|max:255',
                'numero_placa' => 'string|max:255|unique:autos,numero_placa,' . $codigo_auto,
                'precio' => 'numeric',
                'tipo' => 'string|in:deportivo,formal,viaje,familiar',
                'marca' => 'string|max:255',
                'modelo_nombre' => 'string|max:255',
            ]);

            $auto = Autos::findOrFail($codigo_auto);

            $auto->update($validatedData);

            return response()->json([
                'mensaje' => 'Auto actualizado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al actualizar el auto',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }

    public function eliminarAuto($codigo_auto)
    {
        try {
            $auto = Autos::findOrFail($codigo_auto); // Busca el auto por su ID
            $auto->delete();

            return response()->json([
                'mensaje' => 'Auto eliminado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al eliminar el auto',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
