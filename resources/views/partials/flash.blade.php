@if (Session::has('message'))
	<p>
		{{ Session::get('message') }}
	</p>
@endif
