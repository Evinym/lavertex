<?php
    require "header.php";
?>

        <main>
            <?php
                if (isset($_SESSION['userId'])) {
                    header("Location: saloons/saloons.php");
                    exit();
                }
                else {
                    echo '<h2>Aucune session connecter !!!</h2>';
                    echo '  <div class"Napp-container">
                                <form action="includes/login.inc.php" method="post">
                                    <input type="text" name="mail" placeholder="Username/E-mail">
                                    <input type="password" name="pwd" placeholder="password...">
                                    <button type="submit" class="allButton button2Conexion" name="login-submit">Connexion</button>
                                </form>
                                <a href="signup.php"><button type="button" class="allButton button2Conexion">Inscription</button></a>
                            </div>';
                }
            ?>
        </main>

        <?php
            require "saloons/templates/sliders.php";
        ?>

<?php
    require "footer.php";
?>