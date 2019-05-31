<?php

use PHPUnit\Framework\TestCase;

class QuotesTest extends TestCase
{
    private $quotes;

    public function setUp() : void
    {
        $this->quotes = new Quotes();
    }

    /** @test */
    public function testGetQuoteArray()
    {
        
        $this->assertIsArray($this->quotes->getQuoteArray());
    }
    
    /** @test */
    public function countQuotesInArray()
    {
        $this->assertEquals(6,$this->quotes->countQuotesInArray());
    }

    /** @test */
    public function canRetrieveSingleRandomQuote()
    {
        $this->assertIsArray($this->quotes->retrieveSingleRandomQuote());
    }
}