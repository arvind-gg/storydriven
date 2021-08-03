@extends('layouts.page')

@section('title', __('Welcome'))

@section('content')
	<div class="container">
		<h1>{{ __('Albums') }}</h1>
		@foreach ($albums as $album)
			<div><a href="{{ url('album/'.$album->id) }}">{{ $album->title }}</a></div>
		@endforeach

		<h2>{{ __('API Links') }}</h2>
		@foreach ($albums as $album)
			<div><a href="{{ url('api/album/'.$album->id) }}">{{ $album->title }}</a></div>
		@endforeach
	</div>
@endsection