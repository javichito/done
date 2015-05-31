<div class="list-group">
	<div class="list-group-header list-group-item clearfix">
		<strong>Lists</strong>
		<a href="/lists/new" class="btn btn-default btn-sm pull-right">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			CREATE
		</a>
	</div>

	@foreach ($lists as $todoList)
        <a href="/lists/{{ $todoList->id }}" class="list-group-item @if (isset($list) AND $todoList->id == $list->id) active @endif">
        	{{ $todoList->title }}
        </a>
	@endforeach
</div>
