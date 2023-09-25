<?php
// echo 'REQUEST';
// var_dump($_REQUEST);
// echo '<br>GET :';
// var_dump($_GET);
// echo '<br>POST :';
// var_dump($_POST);
// echo '<br> :';
// echo $_GET["name"];
// echo $_GET["lastname"];
// echo '<br> :';
// echo $_GET['name'].' '.$_GET['lastname'];
var_dump ($_POST);
?>
<form action="./formulaire.php" method= 'POST'>
    <input type="text" name='nom' placeholder='entrer votre nom'>
    <input type="text" name='telephone' placeholder='entrer votre tel'>
    <input type="text" name='cin' placeholder='entrer votre CIN'>
    <button type="submit">Enregistrer</button> 
</form>