 
 @extends('layouts.master')

@section('content')
<h1>{{$task->body}}</h1>
<hr>

<div class="comments">
	<ul class="list-group">


	@foreach($task->comments as $comment)
	<li class="list-group-item">
		<strong>
			{{$comment->created_at->diffForHumans()}}:

		</strong>

		{{$comment->body}}</li>
	@endforeach
	</ul>

	<hr>
	<!-- Add a Comment -->
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/tasks/{{$task->id}}/comments"> 
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" class="form-control" placeholder="your comment here" >


					</textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>

			</form>
			@include('layouts.error')

		 </div>

	</div>

</div>
@endsection