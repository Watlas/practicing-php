<?php
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "fusca";

echo $_SESSION['cor']."<br>".$_SESSION['carro'];
