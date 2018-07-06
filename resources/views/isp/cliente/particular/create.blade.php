@extends('isp.templates.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    My Dashboard
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-fw fa-plus"></i> Registro de Cliente Particular
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form id="form_registro_particular" >
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Rut</label>
                                <input type="text" class="form-control" name="input_rut" placeholder="Sin puntos ni guión">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" name="input_nombre" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" name="input_password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Dirección</label>
                                <input type="text" class="form-control" name="input_direccion" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" name="input_email" placeholder="ispuser@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Telefono</label>
                                <input type="text" class="form-control" name="input_telefono" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form> 
                    </div> 
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        </div>
    </div>    
   
    <script>
        $(document).ready(function(){
            $('#form_registro_particular').submit(function(event){

                var data = {
                    'rut'       : $( "input[name='input_rut']" ).val(),
                    'nombre'    : $( "input[name='input_nombre']" ).val(),
                    'password'  : $( "input[name='input_password']" ).val(),
                    'direccion' : $( "input[name='input_direccion']" ).val(),
                    'email'     : $( "input[name='input_email']" ).val(),
                    'telefono'  : $( "input[name='input_telefono']" ).val()   
                }

                createParticular(data);
                event.preventDefault();   
            })
        });    
    </script>
@endsection()