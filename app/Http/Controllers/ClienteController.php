<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Particular;
use App\Telefono;
use App\Contacto;
use App\Empresa;
use App\User;
use Hash;



class ClienteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('isp.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $tipo_cliente = $request->input('tipoCliente');
        if ($tipo_cliente == "particular") {

            $particular = new Particular();
            $telefono = new Telefono();
            $user = new User();

            $user->password = Hash::make($request->input("input_password"));
            $user->email = $request->input("input_email");
            $user->save();


            $particular->rut = $request->input('input_rut');
            $particular->nombre = $request->input('input_nombre');
            $particular->password = $request->input('input_password');
            $particular->email = $request->input('input_email');
            $particular->direccion = $request->input('input_direccion');
            $particular->user_id = $user->id;
            $particular->save();

            $telefono->numero_telefono = $request->input('input_telefono');
            $telefono->particular_id = $particular->id;
            $telefono->save();

            return response()->json($particular, 200);
        } else {
            $contacto = new Contacto();
            $empresa = new Empresa();
            $user = new User();

            $user->password = Hash::make($request->input("input_password"));
            $user->email = $request->input("input_email");
            $user->save();

            $empresa->rut_empresa = $request->input('input_rut_empresa');
            $empresa->nombre_empresa = $request->input('input_nombre_empresa');
            $empresa->password_empresa = $request->input('input_password');
            $empresa->direccion_empresa = $request->input('input_direccion');
            $empresa->save();

            $contacto->rut = $request->input('input_rut');
            $contacto->nombre = $request->input('input_nombre');
            $contacto->email = $request->input('input_email');
            $contacto->telefono = $request->input('input_telefono');
            $contacto->empresa_id = $empresa->id;
            $contacto->user_id = $user->id;

            $contacto->save();
            return response()->json($contacto, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
