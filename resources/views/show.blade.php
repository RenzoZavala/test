<!DOCTYPE html>
<html>
<head>
	<title>Mi primera vista el laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<center><h1>Datos de Usuario</h1></center>
	<ul>
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<center>
					<table class="table table-dark">
						  <thead>
						    <tr>
						      <th scope="col">Dato</th>
						      <th scope="col">Valor</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">Identificador</th>
						      <td>{{$user->id}}</td>
						    </tr>
						    <tr>
						      <th scope="row">Nombre</th>
						      <td>{{$user->name}}</td>
						    </tr>
						    <tr>
						      <th scope="row">Correo</th>
						      <td>{{$user->email}}</td>
						    </tr>
						  </tbody>
					</table>
				</center>
				<p>
					<a href="{{route('user.list')}}">Regresar</a>
				</p>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</ul>
</body>
</html>