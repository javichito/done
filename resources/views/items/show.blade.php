@if ($item->checked)
	<li class="list-group-item disabled no-padding clearfix">
		<label>{{ $item->title }}</label>

		<button type="submit" class="btn btn-xs check" disabled>
			<i class="glyphicon glyphicon-ok"></i>
		</button>

		<form action="/items/{{ $item->id }}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="checked" value="0">
			
			<button type="submit" class="btn btn-default btn-xs undo" title="Undo">
				<i class="glyphicon glyphicon-pencil"></i>
			</button>
		</form>
	</li>
@else
	<li class="list-group-item no-padding clearfix">
		<form action="/items/{{ $item->id }}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			<input type="text" name="title" value="{{ $item->title }}">
		</form>

		<form action="/items/{{ $item->id }}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="checked" value="1">
			
			<button type="submit" class="btn btn-default btn-xs check" title="Done">
				<i class="glyphicon glyphicon-ok"></i>
			</button>
		</form>

		<form action="/items/{{ $item->id }}/destroy" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			
			<button type="submit" class="btn btn-default btn-xs remove" title="Delete">
				<i class="glyphicon glyphicon-remove"></i>
			</button>
		</form>
	</li>
@endif
	
