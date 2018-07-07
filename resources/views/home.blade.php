@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h2></h2>


                    <div class="card-body">

                        <h4>Bienvenido . {{ auth()->user()->email }} </h4>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">codigo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <th scope="row">{{ auth()->user()->id }}</th>
                                <td><a href="/index/{{ auth()->user()->id }}/edit"> editar Perfil</a></td>
                                <td><a href="/delete/{{ auth()->user()->id }}">Dar de Bajar</a></td>
                            </tr>
                       
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
