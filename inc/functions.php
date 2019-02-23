<?php 
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array();
$quotes[] = array('quote' =>'If juniors are going to be able to read errors and use errors to improve, we need to write errors that are useful! and write docs!','source'=>'Nic Hampton','occupation'=>'Treehouse Teacher');
$quotes[] = array('quote' =>'You can model older apis to the spec while you refactor. Or spend less time rewriting by writing a spec first.','source'=>'Matt Trask');
$quotes[] = array('quote' => 'It\'s odd that PHP isn\'t available on all of the Function as a Service platforms…but that won\'t stop us','source'=>'Matthieu Napoli','twitter'=>'@matthieunapoli');
$quotes[] = array('quote' =>'And [our example Ewok] @matthewtrask has a cuddliness of 10','source'=>'Ashley Hutson','citation'=>'Cascadia PHP 2018','year'=>2018,'twitter'=>'@asheliahut');
$quotes[] = array('quote' =>'Sometimes doing things that are ethical means you\'re alone in your actions. Maybe you have to quit your job as a protest of unethical actions, maybe you have to give up the coffee you liked because the brand funds slave labor or endangered babies. Sometimes it\'s hard.','source'=>'Jessica Mauerhan','year'=>2018);
$quotes[] = array('quote' =>'The first step in contributing to open source - Read the F\'ing Manual','source'=>'VM Brasseur','occupation'=>'open source & technical leader');


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
	// Choose a number between 0 and the number of elements in the array.
	$id = array_rand($array,1);
	
	// Use selected number to find the record to return.
	$selectedArray = $array[$id];
	
	// Return record to display.
	return $selectedArray;
}


// Create the printQuote funtion and name it printQuote
function printQuote($array){
	// Call the Random Quote Forth!
	$choseQuote = getRandomQuote($array);
	
	$chosenQuote = '';
	
	// Add the Quote
	$chosenQuote .= "<p class='quote'>".$choseQuote['quote']."</p>";

	// Open the Source
	$chosenQuote .= '<p class="source">'.$choseQuote['source'];

	// Add Occupation if available
	if ($choseQuote['occupation']){
		$chosenQuote .= '<span class="citation">'.$choseQuote['occupation'].'</span>';
	}

	// Add Twitter handle if available
	if ($choseQuote['twitter']){
		$chosenQuote .= '<span class="year"> ('.$choseQuote['twitter'].')</span>';
	}

	// Add Citation if available
	if ($choseQuote['citation']){
		$chosenQuote .= '<span class="citation">'.$choseQuote['citation'].'</span>';
	}

	// Add Year if available
	if ($choseQuote['year']){
		$chosenQuote .= '<span class="year">'.$choseQuote['year'].'</span>';
	}
	
	// Close Source
	$chosenQuote .= "</p>";
	
	// Print the quote
	echo $chosenQuote;
	
	// Change the background with the quote change
	// List Random Colors
	$randColor = array("blue",'green','purple','red');
	// Choose a random color
	$chosenColor = array_rand($randColor, 1);
	echo '<style>body{background-color:'.$randColor[$chosenColor].';</style>';
}
?>