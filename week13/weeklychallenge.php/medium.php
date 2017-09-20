<!-- MEDIUM:
Let’s bring in the deck code from the past example (your normal challenge).
Create a function that will create a deck of cards, randomize it and then return the deck.
We will now create a function to deal these cards to each user. Modify this function so that it returns the number of cards specified for the user. Also, it must modify the deck so that those cards are no longer available to be distributed. -->


<?php
include('normal.php');
//function to create a shuffled deck of cards
function createDeck($deck) {
  shuffle($deck);
  return $deck;
}
//array of shuffled deck
$shuffledDeck = createDeck($deck);
//print out to screen
echo "<pre>";
echo 'Shuffled Deck';
print_r($shuffledDeck);
echo "<pre>";

//create variable for number of cards each user should recieve.
$amountOfCardsPerUser = 10;
//create variable that will represent how many cards are in the deck which will be useful when taking cards from the deck.
$lengthOfDeck = count($shuffledDeck);
//lets splice method know where to begin removing things from the array
$distributedCards = (($lengthOfDeck - $amountOfCardsPerUser));


function dealCards($shuffledDeck, $amountOfCardsPerUser, $distributedCards) {
  //create an array for users hand
  $usersHand = array();
  //remove "cards" from shuffled deck and add them to the users hand.
  //take cards from shuffled deck and distribute them to user.
  $usersHand = array_splice($shuffledDeck, $distributedCards);
  //easier way to make me see what's changing.
  echo ' pre: '.count($shuffledDeck);
  echo ' User: '.count($usersHand);
  //prints out updated version of shuffled deck with removed elements
  print_r($shuffledDeck);
  //prints out users hand.
  echo "<pre>";
  print_r($usersHand);
  echo "<pre>";
}
//calling function
$deal = dealCards($shuffledDeck, $amountOfCardsPerUser, $distributedCards);
?>
