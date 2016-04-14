<?php 
session_start();
 $myDeck = $_SESSION['newDeck'];
 // var_dump($myDeck);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>Deck of Cards</title>
 	<meta name="description" content="This is an OOP assignment for Coding Dojo">
 	<link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>
 	<?php
	 // 	$suits = ['spade', 'club', 'diamond', 'heart'];
		// $values = [1,2,3,4,5,6,7,8,9,10,11,12,13];
		// $Decks = new deck($suits, $values);
		// $_SESSION['newDeck'] = $Decks -> deck;
		// // shuffle($_SESSION['newDeck']);
		var_dump($_SESSION['newDeck']);
	?>

	<form action="process.php" method="post">
		<input type="hidden" name="behavior" value="createDeck" />
		<input type="submit" value="Create Deck" />
	</form>
	<form action="process.php" method="post">
		<input type="hidden" name="behavior" value="shuffle" />
		<input type="submit" value="Shuffle the Deck" />
	</form>
	<a href="reset.php">DESTROY</a>
 </body>
 </html>