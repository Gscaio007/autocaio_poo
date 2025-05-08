<?php
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowCount();
?>