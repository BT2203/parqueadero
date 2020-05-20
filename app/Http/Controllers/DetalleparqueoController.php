<?php

namespace App\Http\Controllers;

use App;
use App\Vehiculo;
use App\Cliente;
use Illuminate\Http\Request;

class DetalleparqueoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = App\Cliente::orderby('nombre_apellido', 'asc')->get();
        $vehiculos = App\Vehiculo::orderby('placa', 'asc')->get();
        $detalleparqueos = App\Detalleparqueo::orderby('horaentrada', 'asc')->get();
        return view('detalleparqueo.index', compact('clientes','vehiculos','detalleparqueos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'horaentrada' => 'required',
            'idCliente' => 'required',
            'idVehiculo' => 'required',
        
        ]);

        App\Detalleparqueo::create($request->all());

        return redirect()->route('detalleparqueo.index')
                        ->with('exito', 'Entrada Registrada con exito');
    }

    public function calculartiempo($id){ 

    $entrada = $vehiculo->horaentrada;
    $salida = $vehiculo->horasalida;
    $tiempo = date_diff($entrada,$salida);

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalleparqueo  $detalleparqueo
     * @return \Illuminate\Http\Response
     */
    public function show(Detalleparqueo $detalleparqueo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalleparqueo  $detalleparqueo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalleparqueo  $detalleparqueo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalleparqueo  $detalleparqueo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
