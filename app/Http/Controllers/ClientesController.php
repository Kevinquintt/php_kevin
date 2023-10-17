<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($m = "")
    {
        $clientes = clientes::paginate(5);
        return view('clientes.index', compact('m', 'clientes'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'ruc' => 'required',
            // Agrega validaciones para otros campos aquí
        ]);

        Clientes::create($data);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }
    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'ruc' => 'required',
            // Otras validaciones
        ]);
    
        $cliente = Clientes::findOrFail($id);
        $cliente->update($data);
    
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Clientes::destroy($id);
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }
}
