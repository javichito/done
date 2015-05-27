@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<span>Your Lists</span>
					
					<a href="/lists/new" class="btn btn-primary btn-sm" style="float: right">
						+ CREATE TODO LIST
					</a>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="/lists/11">
										Sample List
									</a>
									<a href="" class="btn btn-primary btn-active btn-sm" style="float: right;">
										<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						@foreach ($lists as $list)
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										<a href="/lists/{{ $list->id }}">
											{{ $list->title }}
										</a>
										<a href="" class="btn btn-default btn-sm" style="float: right;">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
