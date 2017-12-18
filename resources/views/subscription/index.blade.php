@extends('template.default')



@section('content')

@if (Auth::check() && !$user->subscribed())

	<p>You are subscribed!</p>

@else
	<p>Ooops!! Please Subscribe <a href="#"> Here.</a></p>
@endif



























@endsection


@section('scripts')

@endsection