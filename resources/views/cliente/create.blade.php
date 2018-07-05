@extends('layouts.app')

@section('title','Registro Cliente')

@section('content')
	
		<form class="form-group" method="POST" action="/cliente">
			@csrf
			<div class="form-group">
				<label>Rut</label>
				<input type="text" name="rut" class="form-control">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control">
				<label>Password</label>
				<input type="text" name="password" class="form-control">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
				<label>Telefono</label>
				<input type="text" name="telefono" class="form-control">
                                <label>Direcion</label>
				<input type="text" name="direccion" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<div class="checkbox">
				<center>
					<label>Acepto las condiciones</label>
					<input type="checkbox" name="condiciones" id="condiciones">

				</center>

			</div>
		</form>

@endsection