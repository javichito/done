@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">New List</div>

				@include('partials.errors')
				
				<div class="panel-body">
					<form action="/lists" method="POST">
						
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">

						<div class="form-group">
							<label for="title">Title</label>
							<input id="title" type="text" name="title" class="form-control" autofocus>
						</div>
						
						<div class="actions">
							<input type="submit" value="Create List" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
