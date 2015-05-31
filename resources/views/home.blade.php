@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="row">
				<div class="col-sm-12 col-md-3">
					@include('todo_lists.partials.nav', ['lists' => $lists])
				</div>

				<div class="col-sm-12 col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">Recent todo's</div>

						<div class="panel-body">
							<ul class="list-group">
								@foreach ($items as $item)
									<li class="list-group-item">
										<strong>{{ $item->title }}</strong> was added to <a href="/lists/{{ $item->todoList->id }}">{{ $item->todoList->title }}</a> {{ $item->created_at->diffForHumans() }}.
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
