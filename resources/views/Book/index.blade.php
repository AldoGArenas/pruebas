<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1> SON PERRON

	</h1>
	<table class="responsive">
		<caption>Libros</caption>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Autor</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($libros as $libro)
			<tr>
				<td>{{$libro->nombre}}</td>
				<td>{{$libro->autor}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>