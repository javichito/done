@if ($errors->has())
	<div class="alert alert-danger" role="alert">
			@foreach ($errors->all() as $error)
				<div>
				    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					{{ $error }}
				</div>
			@endforeach
		</ul>
	</div>
@endif
