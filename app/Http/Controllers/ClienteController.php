<?php

namespace App\Http\Controllers;

use App;

use App\Tipodocumento;
use App\Parqueadero;
// use App\Precio;
// use App\Tipovehiculo;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = App\Cliente::orderby('id', 'asc')->get();
        $tipodocumentos = App\Tipodocumento::orderby('nombretipodoc', 'asc')->get();
        $parqueaderos = App\Parqueadero::orderby('id', 'asc')->get();
        return view('cliente.index', compact('clientes','tipodocumentos','parqueaderos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idParqueadero' => 'required',
            'nombre_apellido' => 'required',
            'telefono' => 'required',
            'idTipodoc' => 'required',
            'nrodocumento' => 'required',
        
        ]);

        App\Cliente::create($request->all());     
        return redirect()->route('cliente.index')
                        ->with('exito', 'Cliente Registrado con exito');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = App\Cliente::findorfail($id);
        $tipodocumentos = App\Tipodocumento::orderby('nombretipodoc', 'asc')->get();
        $parqueaderos = App\Parqueadero::orderby('id', 'asc')->get();
        return view('cliente.edit', compact('cliente','tipodocumentos','parqueaderos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idParqueadero' => 'required',
            'nombre_apellido' => 'required',
            'telefono' => 'required',
            'idTipodoc' => 'required',
            'nrodocumento' => 'required',
        
        ]);

        $cliente = App\Cliente::findorfail($id);

        $cliente->update($request->all());

        return redirect()->route('cliente.index')
                        ->with('exito', 'Cliente Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = App\Cliente::findorfail($id);

        $cliente->delete();

        return redirect()->route('cliente.index')
                ->with('exito', 'Cliente Eliminado con exito');
    }
}
