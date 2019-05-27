<?php
    require "../header.php";
?>

<nav class="Napp-header">
    <a href="../saloons.php"><button type="button" class="allButton button2Conexion">Salon</button></a>
    <form action="../includes/logout.inc.php" method="post">
        <button type="submit" class="allButton buttonDconexion" name="logout-submit">Déconnexion</button>
    </form>
</nav>

<br/><br/>

<?php
    include "pln.function.php";

    foreach(get_planing_list() as $event){
        echo "<div id='container-flex'><a href='event.php?id=".$event['id']."'>". $event["surname"] .",". $event["passwordd"] . "</a>";
        echo "<form method='post' action='signup.php' />\n";
        echo "<input type='hidden' value='".$event['id']."' name='delete' />\n";
        echo "<input type='submit' class='allButton button2Conexion' value='Update' />\n";
        echo "<button class='allButton button2Conexion'><a href='event.php?id=".$event['id']."'>"."modifier</a>\n";	echo "</form>";
        echo "</div>";
    }
?>

<?php include "../../footer.php"; ?>