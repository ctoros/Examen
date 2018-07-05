<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Particular;
use App\Telefono;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $particular = new Particular();
        $telefono = new Telefono();
        $particular->rut= $request->input('rut');
        $particular->nombre = $request->input('nombre');
        $particular->password = $request->input('password');
        $particular->email = $request->input('email');
        $particular->direccion = $request->input('direccion');
        $particular->save();
        $telefono->numero_telefono = $request->input('telefono');
        $telefono->particular_id = $particular->id;

        $telefono->save();


        //return response()->json($user.$detail,200);
        return '<script>alert("Creado");window.location.href = "http://localhost:8000/"</script>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
