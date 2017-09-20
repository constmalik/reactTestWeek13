<!--
HARD:
Bring in your createDeck and dealCards function from the previous challenges. For the specified number of players below, assign each player an even set of cards.
We will do this by counting out how many players there are, counting how many cards are in the deck and then dividing them so we know how many cards each player should get.

  */
  $deck =
  $num_players = 4;
  $num_cards_in_deck = //find a function to count the # of elements in an array
  $num_cards_to_give_each_player =
  /*

Use a for loop to add the "dealt hands" to the $players array
Let’s create a simple game. Each player will play a card and whoever has the highest value wins. If there are 2 cards played that have the same value, everyone loses and that round is a draw. Store the results of each game and also who won that round as the value.
If the round is a draw, store the value as DRAW. Use a loop to play each game until all opponents are out of cards. Print out the array of all the rounds. If there was a draw, the round should say DRAW.
If a player has won, it should displayer “Player X” where X is the index of the player. -->

<?php
include('normal.php');
//bring functions in from previous challenge
//make it so the deal cards function will distribute cards to 4 people.
//each player should receive 13 cards.
//include for loop inside of function so that it can iterate until the cards array is empty.

//function to create a shuffled deck of cards
function createDeck($deck) {
  shuffle($deck);
  return $deck;
}
//array of shuffled deck
$shuffledDeck = createDeck($deck);

//create an array for players which will store each players hand.
$players = [
array(),
array(),
array(),
array()
];
$numberOfPlayers = 4;

function dealCards($shuffledDeck, $numberOfPlayers) {
  $numberOfCards = count($shuffledDeck);
  //13 cards per user
  $cardsPerUser = ($numberOfCards / $numberOfPlayers);
    // Use a for loop to add the "dealt hands" to the $players array
    for($i = 0; $i < $numberOfPlayers; $i++) {
      //counts the amount of cards in deck
      $numberOfCardsAfterLoop = count($shuffledDeck);
      $index = $numberOfCardsAfterLoop - $cardsPerUser;
      //take cards from shuffled deck and distribute them to user.
      $players[$i] = array_splice($shuffledDeck, $index);
    }
    // return $players;
  echo "<pre>";
  print_r($players);
  echo "<pre>";
}

function startGame(&$players, $numberOfPlayers) {
  // $playCards = array();
  $winningCard = array();

  for($i=0; $i < 13; $i++) {
    $cardsDealt = array();
    // array_push($playCards, $players[$i]);
    for($j=0;$j < $numberOfPlayers; $j++) {
      $cardsDealt = array_shift($players);
    }
  }
  echo "<pre>";
  print_r($cardsDealt);
  echo "<pre>";
}
$deal = dealCards($shuffledDeck, $numberOfPlayers);
$game = startGame($players, $numberOfPlayers);
?>
