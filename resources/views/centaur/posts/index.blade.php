@extends('centaur.layout')

@section('title')
Posts
@endsection

@section('content')
<div class="clearfix">
<h1 class="pull-left">Posts</h1>
<a href="{{route ('posts.create')}}" class="btn btn-primary btn-lg pull right">Create new Post</a>
</div>
<hr>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Author</th>
			<th width="150">Actions</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($posts as $post)
	<tr>
		<td></td>
		<td>{{$post->}}


	@endforeach
	</tbody>
</table>
{!! $posts->links() !!}
@endsection