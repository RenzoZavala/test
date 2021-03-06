<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Usuario</title>
</head>
<body>
	<center>
		<h5>Crear Nuevo Usuario</h5>
		@if($errors->any())
		<div class="alert alert-danger">
			<h6>Corrige los siguientes errores por favor</h6>
			
		</div>
		@endif
		<form method="POST" action="{{url('usuarios/store')}}">
			{!! csrf_field() !!}
			<p>
			<label for="name">Nombre</label>
			<input type="text" name="name" value="{{ old('name') }}">
			@if($errors->has('name'))
				<p>{{ $errors->first('name') }}</p>
			@endif
			<br>
			</p>
			<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="{{ old('email') }}">
			@if($errors->has('email'))
				<p>{{ $errors->first('email') }}</p>
			@endif
			<br>
		    </p>
		    <p>
		    <label for="password">Contraseña</label>
			<input type="password" name="password">
			@if($errors->has('password'))
				<p>{{ $errors->first('password') }}</p>
			@endif
			<br>
		    </p>
			<button type="submit">Crear Nuevo Usuario</button>
			
		</form>
	</center>
</body>
</html>