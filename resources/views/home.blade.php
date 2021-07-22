<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Library</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<table class="responsive-table striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Part</th>
							<th>Authors</th>
							<th>Published</th>
						</tr>
					</thead>
					<tbody>
						@foreach($books as $book)
						<tr>
							<td>{{ $book->title }}</td>
							<td>{{ $book->part }}</td>
							<td>{{ $book->authors }}</td>
							<td>{{ $book->published_date }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>