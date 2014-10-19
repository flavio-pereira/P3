@extends('_master')

@section('title')
	P3 - Flavio Pereira
@stop


@section('content')
	<br />
	<br />
	<div class ="container">
     <div class="header">
        <h1> Lorem Ipsum Text</h1>
        <p class="lead">Defined by <a href='http://www.lipsum.com/' target="_blank"> Lorem Ipsum website</a>, is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
     </div>
    </div>

@section('body')

	<div class="container">
		{{ Form::open(array('url' => 'loremipsum', 'method' => 'GET'))}}
			{{Form::label('numParagraphs', 'Number of Paragrahs from 1-10:')}}
			{{Form::number('numParagraphs', $numParagraphs)}}
			{{Form::submit("Submit")}}
		{{ Form::close()}}
	</div>

	<hr>
	@foreach ($paragraphs as $paragraphs)
		<div class="container">{{$paragraphs}}</div>
		<hr>
	@endforeach
@stop