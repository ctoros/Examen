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
                    <i class="fa fa-fw fa-plus"></i> Registro de Empresa
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form id="form_registro_empresa" >
                            <h4><b>Datos Empresa</b></h4></br>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Rut Empresa</label>
                                <input type="text" class="form-control" name="input_rut" placeholder="Sin puntos ni guión">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Razón Social</label>
                                <input type="text" class="form-control" name="input_nombre" placeholder="ex: Empresa SPA">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" name="input_password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Dirección</label>
                                <input type="text" class="form-control" name="input_direccion" placeholder="">
                            </div>
                            <hr><h4><b>Datos Contacto</b></h4></br>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre Contacto</label>
                                    <input type="text" class="form-control" name="input_nom_contacto" placeholder="ex: Juan Pérez">
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Rut Contacto</label>
                                    <input type="text" class="form-control" name="input_rut_contacto" placeholder="Sin puntos ni guión">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" name="input_email_contacto" placeholder="ispuser@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Telefono</label>
                                <input type="text" class="form-control" name="input_telefono_contacto" placeholder="">
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
            $('#form_registro_empresa').submit(function(event){
                debugger;
                var data = {
                    'rut'                : $( "input[name='input_rut']" ).val(),
                    'nombre'             : $( "input[name='input_nombre']" ).val(),
                    'password'           : $( "input[name='input_password']" ).val(),
                    'direccion'          : $( "input[name='input_direccion']" ).val(),
                    'nombre_contacto'    : $( "input[name='input_nom_contacto']" ).val(),
                    'rut_contacto'       : $( "input[name='input_rut_contacto']" ).val(),
                    'email_contacto'     : $( "input[name='input_email_contacto']" ).val(),
                    'telefono_contacto'  : $( "input[name='input_telefono_contacto']" ).val()   
                }

                createEmpresa(data);
                event.preventDefault();   
            })
        });    
    </script>
@endsection()