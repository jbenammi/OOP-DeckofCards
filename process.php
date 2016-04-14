<?php 
session_start();


$createDeck = function($data){

class card
{
	public $value;
	public $suit;

	function __construct($suits, $values)
	{ 
	$this -> value = $values;
	$this -> suit = $suits;
	}
}

class deck // This is My Node
{
	public $deck = [];
	
	function __construct($suit, $value)
	{
		for ($i = 0; $i < count($suit); $i++){
			for($j = 0; $j < count($value); $j++){
				$this -> deck[] = new card($suit[$i], $value[$j]);
			}
		}
	}
}
 	$suits = ['spade', 'club', 'diamond', 'heart'];
	$values = [1,2,3,4,5,6,7,8,9,10,11,12,13];
	$myDeck = new deck($suits, $values);
	$myDeck2 = $myDeck -> deck;
	$_SESSION['newDeck'] = $myDeck2;
	header('Location: OOP-DeckofCards.php');
	exit();
};


$shuffles = function ($data){
	shuffle($_SESSION['newDeck']);
	header('Location: OOP-DeckofCards.php');
	exit();
};


$action_catcher = [
	'shuffle' => $shuffles,
	'createDeck' => $createDeck,
	// 'comment' => $comment,
	// 'messagetocomment' => $message_comment,
	// 'login' => $login,
	// 'logout' => $logout
];
$action_catcher[$_POST['behavior']]($_POST);




 ?>