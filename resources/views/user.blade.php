<!DOCTYPE html>
<html>
<head>
	<title>Mi primera vista el laravel</title>
</head>
<body>
	<h1>{{$title}}</h1>
	<ul>
		@forelse ($users as $user)
			<a href="{{ route('user.detail',['id' => $user->id]) }}"><li>{{$user->name}}</a>: {{$user->email}}</li>
			<!--<a href="{{ url('/usuarios/'.$user->id) }}"><li>{{$user->name}}</a>: {{$user->email}}</li>-->
			<!--<a href="{{ url("/usuarios/$user->id") }}"><li>{{$user->name}}</a>: {{$user->email}}</li> -->
		@empty
			<li>No se encontraron usuarios</li>
		@endforelse
	</ul>
</body>
</html>