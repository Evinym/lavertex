<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/lavertex.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../../img/lavertex.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="templates/nav.css">
    <title>LA'VERTEX</title>
    
</head>
<body>
    <header>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<img class="logo-num" src="../img/logo.png" alt="">';
            }
            else {
                header("Location: ../index.php?=errorDeConnexion");
                exit();
            }
        ?>
    </header>