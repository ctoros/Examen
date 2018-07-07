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
                    <i class="fa fa-table"></i>&nbsp;Listado de muestras para procesar
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="list_table_json" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Código de Usuario</th>
                                        <th scope="col">Código de Muestra</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>987769</td>
                                        <td>2354523</td>
                                        <td>
                                            <button id="procesar" type="button" class="btn btn-primary">Procesar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>542625</td>
                                        <td>6546654</td>
                                        <td>
                                            <button id="procesar" type="button" class="btn btn-primary">Procesar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>857576</td>
                                        <td>7658657</td>
                                        <td>
                                            <button id="procesar" type="button" class="btn btn-primary">Procesar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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