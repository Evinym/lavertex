<?php
require "pln.function.php";

if(isset($_GET['id'])){
	list($id, $coiffure, $date, $hour, $surname, $passwordd) = get_planing(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$coiffure = trim(filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING));
	$date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_URL));
	$hour = trim(filter_input(INPUT_POST, 'hour', FILTER_SANITIZE_URL));
    $surname = trim(filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING));
    $passwordd = trim(filter_input(INPUT_POST, 'passwordd', FILTER_SANITIZE_STRING));

	if(empty($coiffure) ||empty($date) || empty($hour) || empty($surname) || empty($passwordd)){
		$error_message= "Please fill in the required fields";
	} else {

		if(add_planing($coiffure, $date, $hour, $surname, $passwordd, $id)){
			header('Location: ../saloons.php');
			exit();
		} else {
			$error_message = "Could not add book";
		}
	}
}
?>

<?php
    require "../header.php";
?>

<nav class="Napp-header">
    <a href="../saloons.php"><button class="allButton everyButton" type="button" class="">Salon</button></a>
    <form action="../includes/logout.inc.php" method="post">
        <button type="submit" class="allButton buttonDconexion" name="logout-submit">Déconnexion</button>
    </form>
</nav>

<?php 
if(isset($error_message)){
	echo $error_message;
}
?>

<h2>
<?php
if(!empty($id)){
	echo "Update";
} else {
	echo "Book on bank";
}
?></h2>


<form method="post" action="event.php">

	<label for="titre">Adresse résidentiel</label>
	<input type="text" name="titre" id="titre" value="">

	<label for="date">Date de rendez-vous</label>
	<input type="date" name="date" id="date" value="">

	<label for="hour">Heure de rendez-vous</label>
	<input type="time" name="hour" id="hour" value="">

    <label for="surname">Username</label>
    <input type="text" name="surname" id="surname" value="">

    <label for="passwordd">password user</label>
    <input type="password" name="passwordd" id="passwordd" value="">

<?php
	if(!empty($id)){
		echo '<input type="hidden" name="id" value="'.$id.'">';
	}
?>
	<input type="submit" name="submit" value="Envoyer">

</form>


<a href="../saloons.php">Back to saloons</a>

<?php include "../../footer.php"; ?>