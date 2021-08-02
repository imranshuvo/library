@include('header')

	<div class="row">
		<div class="col s12">
			<h4>Add Boook</h4>
		</div>
	</div>

	<div class="row">
		<form class="col s12" method="post" action="/addbook">
			<div class="input-field col s12">
				<input type="text" name="title" placeholder="Book title">
				<label for="Title">Title</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="authors" placeholder="Authors, comma separated">
				<label for="Title">Authors</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="part" placeholder="Book part/khondo">
				<label for="Title">Part</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="publish" placeholder="Publish date/year">
				<label for="Title">Publish Date/Year</label>
			</div>

			<div class="input-field col s12">
				<button class="btn-large waves-effect waves-light">   
					Add
				</button>
			</div>
		</form>
	</div>


@include('footer')