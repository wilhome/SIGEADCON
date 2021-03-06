@extends('admin.layoutAdmin')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('notificaciones')
	
@endsection

@section('contenido')
<div class="row">
		<div class="col mx-auto">
			<h4><center>Crear nuevo Administrador</center></h4>
			<br>
		</div>
</div>
<div class="row">
		<div class="col-8 mx-auto">
			<form method="POST" action="{{ route('admin.actualizaradmin') }}">
				{{ method_field('PUT') }}
			  {{ csrf_field() }}
				<div class="form-row">
				 <div class="form-group col-md-6">
					<label for="user_admin">Usuario</label>
					<input type="text" class="form-control" name="user_admin" id="user_admin" placeholder="User" value="{{ $admin->user }}" required>
				 </div>
				 <div class="form-group col-md-6">
					<label for="password_admin">Password</label>
					<input type="text" class="form-control" name="password_admin" id="password_admin" placeholder="Password" value="{{ $admin->password }}"required>
				 </div>
			  </div>
				<br>
				 <button type="submit" class="btn btn-danger">Actualizar</button>
			</form>
		</div>
</div>
@endsection
