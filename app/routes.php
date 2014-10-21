<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', function()
{
	return View::make('home');
});


// Lorem Ipsum Route 

Route::any('/loremipsum', function()
 {

 		//Variable to get the number of Paragraphs:

	    $numParagraphs = Input::get('numParagraphs');

		$generator = new Badcow\LoremIpsum\Generator();
		
		$paragraphs = $generator->getParagraphs($numParagraphs);

		return View::make('loremipsum')
			->with(array('paragraphs' => $paragraphs, 'numParagraphs' => $numParagraphs));

});

// Random User Route

Route::any('/user', function()
{
		$numUsers = Input::get('numUsers');

	// Those are the variables used to include BirhtDate, Address and Small Profile. 
	$finaluser = '';
	$bday = '0';
	$location = '0';
	$profile= '0';

	$faker = Faker\Factory::create();

	// For loop to to gather the options passed from Form. 

	for ($i=0; $i < $numUsers; $i++) {
	  $finaluser .= "<pre>".$faker->name."\n";

	  if (Input::get('bdate')) {
	  		$finaluser .= $faker->dateTimeThisCentury->format('Y-m-d'). "\n";
	  		$bday = '1';
	  }
		  if (Input::get('location')) {		  
	  		$finaluser .= $faker->address. "\n";
	  		$location = '1';
	  }
	  if (Input::get('smallprofile')) {
	  		$finaluser .= $faker->text;
	  		$profile = '1';
	  }
	  
	  $finaluser .= "</pre>";

	}

	return View::make('user')
		->with(array('finaluser' => $finaluser))
		->with(array('numUsers' => $numUsers))
		->with(array('bday' => $bday))
		->with(array('location' => $location))
		->with(array('profile' => $profile));
	
});