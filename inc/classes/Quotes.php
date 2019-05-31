<?php
declare(strict_types=1);

class Quotes {
    protected $quotes = [
        ['quote' =>'If juniors are going to be able to read errors and use errors to improve, we need to write errors that are useful! and write docs!','source'=>'Nic Hampton','occupation'=>'Treehouse Teacher'],
        ['quote' =>'You can model older apis to the spec while you refactor. Or spend less time rewriting by writing a spec first.','source'=>'Matt Trask'],
        ['quote' => 'It\'s odd that PHP isn\'t available on all of the Function as a Service platforms…but that won\'t stop us','source'=>'Matthieu Napoli','twitter'=>'@matthieunapoli'],
        ['quote' =>'And [our example Ewok] @matthewtrask has a cuddliness of 10','source'=>'Ashley Hutson','citation'=>'Cascadia PHP 2018','year'=>2018,'twitter'=>'@asheliahut'],
        ['quote' =>'Sometimes doing things that are ethical means you\'re alone in your actions. Maybe you have to quit your job as a protest of unethical actions, maybe you have to give up the coffee you liked because the brand funds slave labor or endangered babies. Sometimes it\'s hard.','source'=>'Jessica Mauerhan','year'=>2018],
        ['quote' =>'The first step in contributing to open source - Read the F\'ing Manual','source'=>'VM Brasseur','occupation'=>'open source & technical leader'],
    ];

    public function getQuoteArray()
    {
        // Retrieve all quotes
        return $this->quotes;
    }

    public function countQuotesInArray()
    {
        // Return the number of quotes in the array
        return count($this->quotes);
    }

    public function retrieveSingleRandomQuote()
    {
        // Retrieve the number of quotes available
        $quoteCount = $this->countQuotesInArray();

        // Retrieve random quote
        $randomQuoteId = random_int(0,$quoteCount-1);

        // return a random quote
        return $this->quotes[$randomQuoteId];
    }
}
