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
                <i class="fa fa-fw fa-plus"></i> Registro de Cliente
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form id="form_registro_particular" action="/cliente" method="POST">
                        @csrf
                        <fieldset>
                            <legend>Seleccione </legend>
                            <label>
                                <input type="radio" id="tipoClienteEmpresa" name="tipoCliente" onclick="mostrarDatosEmpresa()" value="empresa"> Empresa
                            </label>
                            <label>
                                <input type="radio" id="tipoClienteParticular" name="tipoCliente" onclick="mostrarDatosParticular()"  value="particular"> Particular
                            </label>
                        </fieldset>
                        <div class="form-group" id="rut" style="display: none;">
                            <label for="exampleFormControlInput1">Rut</label>
                            <input type="text" class="form-control" name="input_rut" placeholder="Sin puntos ni guión">
                        </div>
                        <div class="form-group" style="display: none;" id="rut_empresa">
                            <label for="exampleFormControlInput1">Rut Empresa</label>
                            <input type="text" class="form-control" name="input_rut_empresa" placeholder="Sin puntos ni guión">
                        </div>
                        <div class="form-group" style="display: none;" id="nombre">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" name="input_nombre" placeholder="">
                        </div>
                        <div class="form-group" style="display: none;" id="nombre_empresa">
                            <label for="exampleFormControlInput1">Nombre Empresa</label>
                            <input type="text" class="form-control" name="input_nombre_empresa" placeholder="">
                        </div>
                        <div class="form-group" style="display: none;" id="pass">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" name="input_password" placeholder="">
                        </div>
                        <div class="form-group" style="display: none;" id="direccion" >
                            <label for="exampleFormControlInput1">Dirección</label>
                            <input type="text" class="form-control" name="input_direccion" placeholder="">
                        </div>
                        <div class="form-group" style="display: none;" id="email">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" name="input_email" placeholder="ispuser@example.com">
                        </div>
                        <div class="form-group" style="display: none;" id="telefono">
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

<!--<script>
    $(document).ready(function () {
        $('#form_registro_particular').submit(function (event) {
            debugger;
            if ($("input[name='tipoCliente']:checked").val() == "empresa") {
                debugger;
                var data = {
                    'rut': $("input[name='input_rut']").val(),
                    'rut_empresa': $("input[name='input_rut_empresa']").val(),
                    'nombre': $("input[name='input_nombre']").val(),
                    'nombre_empresa': $("input[name='input_nombre_empresa']").val(),
                    'password': $("input[name='input_password']").val(),
                    'direccion': $("input[name='input_direccion']").val(),
                    'email': $("input[name='input_email']").val(),
                    'tipoCliente': $("input[name='tipoCliente']:checked").val(),
                    'telefono': $("input[name='input_telefono']").val()
                }
                createCliente(data);
                event.preventDefault();
            } else {
                debugger;
                var data = {
                    'rut': $("input[name='input_rut']").val(),
                    'nombre': $("input[name='input_nombre']").val(),
                    'password': $("input[name='input_password']").val(),
                    'direccion': $("input[name='input_direccion']").val(),
                    'email': $("input[name='input_email']").val(),
                    'tipoCliente': $("input[name='tipoCliente']:checked").val(),
                    'telefono': $("input[name='input_telefono']").val()
                }
                createCliente(data);
                event.preventDefault();
            }
            debugger;

        })
    });
</script>
--><script type="text/javascript">
    function mostrarDatosEmpresa() {
        document.getElementById('direccion').style.display = 'block';

        document.getElementById('rut').style.display = 'block';
        document.getElementById('nombre').style.display = 'block';
        document.getElementById('nombre_empresa').style.display = 'block';
        document.getElementById('rut_empresa').style.display = 'block';
        document.getElementById('pass').style.display = 'block';
        document.getElementById('direccion').style.display = 'block';
        document.getElementById('email').style.display = 'block';
        document.getElementById('telefono').style.display = 'block';
    }
</script>
<script type="text/javascript">
    function mostrarDatosParticular() {

        document.getElementById('rut').style.display = 'block';
        document.getElementById('nombre').style.display = 'block';
        document.getElementById('nombre_empresa').style.display = 'none';
        document.getElementById('rut_empresa').style.display = 'none';
        document.getElementById('pass').style.display = 'block';
        document.getElementById('direccion').style.display = 'block';
        document.getElementById('email').style.display = 'block';
        document.getElementById('telefono').style.display = 'block';
    }
</script>
@endsection()