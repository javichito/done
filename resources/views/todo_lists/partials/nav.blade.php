<div class="list-group">
	@foreach ($lists as $todoList)
        <a href="/lists/{{ $todoList->id }}" class="list-group-item @if ($todoList->id == $list->id) active @endif">
        	{{ $todoList->title }}
        </a>
	@endforeach
</div>