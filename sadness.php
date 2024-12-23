<?php
    require_once('nav.php');
    $score=null;
    $name= readline("Entrer votre prenom pour le test : ");
    $quest=null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grown: Sadness</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <form action="/sadness.php" method="GET">
        <label for="">Entrer votre nom pour le test:</label>
        <input type="text" name="user_name" placeholder="John Doe..">

    </form>
</body>
</html>