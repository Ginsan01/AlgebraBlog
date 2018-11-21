@extends('centaur.layout')

@section('content')

<h1>Create Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
 
 {{ csrf_field () }}
 
 
 <div class="form-group {{($errors->has('title')) ? 'has-error': ''}}">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
	{!! ($errors->has('title')) ? '<p class="text-danger">'.$errors->first('title').'</p>' : '' !!}
	</div>
   <div class="form-group {{($errors->has('content')) ? 'has-error': ''}}">
    <label for="content" class="control-label">Content</label>
    <input type="text" class="form-control" id="content" name="content">
	{!! ($errors->has('content')) ? '<p class="text-danger">'.$errors->first('content').'</p>' : '' !!}
  </div>
  <div class="form-group">
	<button type="submit" class="btn btn-primary">Publish</button>
	 </div>

</form>
@endsection