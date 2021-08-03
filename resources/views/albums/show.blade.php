@extends('layouts.page')

@section('title', $album->title)

@section('content')
	<div class="album-single">
		<div class="display-options">
			<input type="radio" value="grid" name="display_option" /><label>{{ __('Grid') }}</label>
			<input type="radio" value="list" name="display_option" checked /><label>{{ __('List') }}</label>
		</div>
		<div class="gallery"></div>
	</div><!-- /album-single -->

@endsection