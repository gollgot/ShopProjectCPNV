@extends('layout')

@section('content')

	@if(isset($people))
		<ul>
			@foreach($people as $person)
				<li>{{$person}}</li>
			@endforeach
		</ul>
		<ul>
			@foreach($test as $a)
				<li>{{$a}}</li>
			@endforeach
		</ul>
	@else
		<p>There is actually no people ...</p>
	@endif

@stop