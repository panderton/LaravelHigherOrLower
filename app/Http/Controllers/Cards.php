<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Cards extends Controller
{
    // Have the cards and values easily accessable
    private $Values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace');
    private $Suits  = array('Spades', 'Hearts', 'Diamonds', 'Clubs');
    private $Deck = array();
    private $ValueArray = array();
    
    public function index()
    {
        $this->_SetCardsValueArray();
        $this->_SetDeck();
        $this->_ShuffleDeck();
        return view('welcome',['Deck' => $this->Deck, 'Values' => $this->ValueArray]);
    }
    
    private function _SetCardsValueArray()
    {
        // For each suit use Key as value for higher/lower
        foreach ($this->Values as $Value) {
            foreach ($this->Suits as $Suit) {
                $this->ValueArray[$Suit][] = $Value;
            }
        }
    }
    
    private function _SetDeck()
    {
        // For each Suit assign a card value
        foreach ($this->Suits as $Suit) {
            foreach ($this->Values as $Value) {
                $this->Deck[] = $Value . ' ' . $Suit;
            }
        }
    }

    private function _ShuffleDeck()
    {
        $Total = count($this->Deck);

        foreach ($this->Deck as $Key => $Card) {
            // Random another card.
            $Card2_Key = mt_rand(1, $Total) - 1;
            $Card2 = $this->Deck[$Card2_Key];

            // Change their positions.
            $this->Deck[$Key] = $Card2;
            $this->Deck[$Card2_Key] = $Card;
        }
    }
    
    public function NextCard()
    {        
        var_dump('test');exit;
        $Outcome = 0;
        // Cycle to the next card in the deck and compare its value with first
        foreach($this->Deck as $Key => $Card)
        {
            // Compare the last card with the next card
            if($Card)
            {
                $Outcome = 1;
            }
        }    
        
        // Return as JSON so JQuery can display the next card and outcome
        echo json_encode(array('Deck' => $this->Deck, 'NextCard' => $Card, 'Outcome' => $Outcome));
    }
}