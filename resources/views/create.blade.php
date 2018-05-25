@extends('layout.app')

@section('title')
 	Halaman Create
@endsection


@section('body')
	<h1>Halaman Create Post</h1>
	<form action="{{route ('post.store')}}" method="post" >
		{{ csrf_field() }}
		<label for="title">Title</label>
		<input type="text" name="title" id="title">
		<br>
		<label for="body">Body</label>
		<textarea name="body" id="body" cols="30" rows="10"></textarea>
		<br>
		<button type="submit">Submit</button>
	</form>
@stop