<li class="list-group-item no-padding clearfix">
	<form action="/items/{{ $item->id }}" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">

		<input type="text" name="title" value="{{ $item->title }}">
	</form>

	<form action="/items/{{ $item->id }}/destroy" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		
		<button type="submit" class="btn btn-default btn-xs">
			<i class="glyphicon glyphicon-remove"></i>
		</button>
	</form>
</li>
