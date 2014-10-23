@extends('_master')

@section('title')
	Foobooks: List of Books
@stop


@section('content')
	<h1>List of all books</h1>

	View List As:
	<a href="/list/json" target="_blank">JSON</a>
	<a href="/list/pdf" target="_blank">PDF</a>
	@foreach($books as $title => $books)
		<section>
			<h2>{{$title}}</h2>
		</section>
	@endforeach
@stop