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
                    <i class="fa fa-fw fa-plus"></i> Registro de Análisis 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row">
                                <div class="col p-3 mb-2 bg-secondary text-white">
                                    <label>Código del Cliente: </label>
                                </div>
                                <div class="col p-3 mb-2 bg-secondary text-white">
                                    <label>Código de la Muestra: </label>
                                </div>
                                <div class="container">
                                    <form id="form_registro_analisis" >
                                        <table class="table table-bordered" id="list_table_json" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><b>Tipo de Análisis</b></th>
                                                    <th scope="col"><b>PPM de la muestra</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Micotoxinas</td>
                                                    <td><input type="text" class="form-control" name="input_ppm" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Metales Pesados</td>
                                                    <td><input type="text" class="form-control" name="input_ppm" placeholder=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary">Guardar Análisis</button>
                                    </form>  
                                </div>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        </div>
    </div>    
@endsection()