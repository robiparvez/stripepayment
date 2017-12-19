@extends('template.default')

@section('title', '|' . ' Home')

@section('content')

@if (Auth::check() && !$user->subscribed())

	<p>You are subscribed!</p>

@else
	<p>Ooops!! Please Subscribe <a href="{{ route('subscription-join') }}"> Here.</a></p>
@endif


@endsection


@section('scripts')

@endsection