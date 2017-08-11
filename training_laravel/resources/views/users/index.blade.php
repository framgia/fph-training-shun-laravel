@extends('layout')


@section('content')
	<h1>Users</h1>

	@foreach($users as $user)
		<ul>
			<li>{{ $user->name }}</li>
		</ul>
	@endforeach

@endsection