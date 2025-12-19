<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    private array $estados = [
        'RECIEN_LLEGO','REVISANDO','REPARACION','LISTO','RETIRADO'
    ];

    public function index()
    {
        $ingresos = Ingreso::latest('fecha_ingreso')->paginate(10);
        return view('ingresos.index', compact('ingresos'));
    }

    public function create()
    {
        return view('ingresos.create', ['estados' => $this->estados]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'placa' => 'required|max:6|unique:ingresos',
            'marca' => 'required',
            'modelo' => 'required',
            'problema' => 'required',
            'cliente_nombre' => 'required',
            'cliente_telefono' => 'required|max:10',
            'estado' => 'required'
        ]);

        Ingreso::create($data);
        return redirect()->route('ingresos.index');
    }

    public function edit(Ingreso $ingreso)
    {
        return view('ingresos.edit', compact('ingreso'))
            ->with('estados', $this->estados);
    }

    public function update(Request $request, Ingreso $ingreso)
    {
        $data = $request->validate([
            'placa' => 'required|max:6|unique:ingresos,placa,' . $ingreso->id,
            'marca' => 'required',
            'modelo' => 'required',
            'problema' => 'required',
            'cliente_nombre' => 'required',
            'cliente_telefono' => 'required',
            'estado' => 'required'
        ]);

        $ingreso->update($data);
        return redirect()->route('ingresos.index');
    }

    public function destroy(Ingreso $ingreso)
    {
        $ingreso->update(['estado' => 'RETIRADO']);
        return redirect()->route('ingresos.index');
    }
}

