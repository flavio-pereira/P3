@extends('_master')

@section('title')
	P3 - Flavio Pereira
@stop


@section('content')
	<div class ="container">
     <div class="header">
        <h1> Generate a Password</h1>
        <p class="lead"> 
        This tool will help you to create users where you can specify the number of users, birthday, address, and some profile description.
        </p>
     </div>
    </div>
@stop

@section('body')
	<div class="container">
		{{ Form::open(array('url' => 'xkcd-password'))}}
			{{Form::label('words', 'Number of Words:')}}
			{{Form::number('words', $words)}}
			<br>
			{{Form::label('number', 'Do you want to include a number?')}}
			{{Form::checkbox('number','1', $number)}}
			<br>
			{{Form::label('symbol', 'Do you want to include a symbol?')}}
			{{Form::checkbox('symbol','1', $symbol)}}
			<br>
			{{Form::label('upper', 'First letter Uppercase?')}}
			{{Form::checkbox('upper','1', $upper)}}
			<br>
			{{Form::submit("Submit")}}
		{{ Form::close()}}
	</div>
	</div>
	
	<br />

	<div class="container">
	
	{{ $password }}
	</div>

@stop