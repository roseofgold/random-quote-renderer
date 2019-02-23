<?php 
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array();
$quotes[] = array(
		'quote' =>'If juniors are going to be able to read errors and use errors to improve, we need to write errors that are useful! and write docs!',
		'source'=>'Nic Hampton',
);
$quotes[] = array(
		'quote' =>'You can model older apis to the spec while you refactor. Or spend less time rewriting by writing a spec first.',
		'source'=>'Matt Trask',
);
$quotes[] = array(
		'quote' => 'It\'s odd that PHP isn\'t available on all of the Function as a Service platforms…but that won\'t stop us',
		'source'=>'Matthieu Napoli',
);
$quotes[] = array(
		'quote' =>'And [our example Ewok] @matthewtrask has a cuddliness of 10',
		'source'=>'@asheliahut',
		'citation'=>'Cascadia PHP 2018',
		'year'=>2018,
);
$quotes[] = array(
		'quote' =>'Sometimes doing things that are ethical means you\'re alone in your actions. Maybe you have to quit your job as a protest of unethical actions, maybe you have to give up the coffee you liked because the brand funds slave labor or endangered babies. Sometimes it\'s hard.',
		'source'=>'Jessica Mauerhan',
		'citation'=>,
		'year'=>2018,
);
$quotes[] = array(
		'quote' =>'The first step in contributing to open source - Read the F\'ing Manual',
		'source'=>'VM Brasseur',
);


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
	$randomQuote[] = array_rand($array,1);
	
	$Quote = '';
	//Add the Quote
	$Quote .= "<p class='quote'>".$randomQuote['quote']."</p>";
	//Open the Source
	$Quote .= '<p class="source">'.$randomQuote['source'];
	// Add Citation if available
	$Quote .= '<span class="citation">'.$randomQuote['citation'].'</span>';
	// Add Year if available
	$Quote .= '<span class="year">'.$randomQuote['year'].'</span>';
	// Close Source
	$Quote .= "</p>";
	return $Quote;
}


// Create the printQuote funtion and name it printQuote
function printQuote(){
	getRandomQuote($quotes);
}
?>