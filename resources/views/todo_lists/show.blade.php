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
						<div class="panel-heading">{{ $list->title }}</div>

						<div class="panel-body">

							@include('partials.errors')
							@include('partials.flash')

							<form action="/items" method="POST" data-action="new_item">

								<input type="hidden" name="_token" value="{!! csrf_token() !!}">

								<input type="hidden" name="list_id", value="{{ $list->id }}">

								<div class="form-group">
								    <label for="title">What's Next?</label>
								    <input id="title" type="text" name="title" value="{{ old('title') }}" class="form-control" autofocus>
								</div>

							</form>

							<ul class="list-group">
								@foreach ($list->items as $item)
									@include('items.show', ['item' => $item])
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
