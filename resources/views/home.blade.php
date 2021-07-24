
@include('header')

	<div class="row">
		<div class="col s12">
			<form>
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="search" placeholder="Search for a book">
						<div class="s12 search-result">
							<!-- Search result will be shown here -->
						</div>
					</div>
				</div>
			</form>

		</div>

	</div>
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

@include('footer')
    