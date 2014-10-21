@extends('_master')

@section('title')
	P3 - Flavio Pereira
@stop


@section('content')
	<div class ="container">
     <div class="header">
        <h1> Create Random Users</h1>
        <p class="lead"> 
        This tool will help you to create users where you can specify the number of users, birthday, address, and some profile description.
        </p>
     </div>
    </div>
@stop

@section('body')
	<div class="container">
		{{ Form::open(array('url' => 'user'))}}
			{{Form::label('numUsers', 'Number of Users:')}}
			{{Form::select('numUsers', array('1' => '1', 
												  '2' => '2', 
												  '3' => '3',
												  '4' => '4',
												  '5' => '5'))}}
			<br>
			{{Form::label('birthDate', 'Do you want to include a Birth Date?')}}
			{{Form::checkbox('bdate','1', $bday)}}
			<br>
			{{Form::label('location', 'Do you want to include an Address?')}}
			{{Form::checkbox('location','1', $location)}}
			<br>
			{{Form::label('smallBlurb', 'Do you want to include a Profile Blurb?')}}
			{{Form::checkbox('smallprofile','1', $profile)}}
			<br>
			{{Form::submit("Submit")}}
		{{ Form::close()}}
	</div>
	</div>
	
	<br />

	<div class="container">
	
	{{ $finaluser }}
	</div>

@stop