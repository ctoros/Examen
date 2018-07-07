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
                    <i class="fa fa-fw fa-plus"></i> Registro de Muestra
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form id="form_registro_muestra" >
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Código Cliente</label>
                                <input type="text" class="form-control" name="input_codigo_cliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Rut Cliente</label>
                                <input type="text" class="form-control" name="input_rut_cliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre Cliente</label>
                                <input type="text" class="form-control" name="input_nombre_cliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Recepción</label>
                                <input type="date" class="form-control" name="input_fecha_recepcion" placeholder="">
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Temperatura Muestra</label>
                                    <input type="text" class="form-control" name="input_temp_muestra" placeholder="">
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Cantidad Muestra</label>
                                    <input type="text" class="form-control" name="input_cantidad_muestra" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tipo de análisis a realizar</label>
                                <select name="select_tipo_analisis" class="form-control">
                                    <option>Default select</option>
                                    <option value="">Default select</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form> 
                    </div> 
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        </div>
    </div>    
@endsection()