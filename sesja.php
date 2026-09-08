<?php
session_start();
$typ = $_GET["typ"]?? "";

if ($typ == "") {
    exit("Brak typu");
}

if (($_GET["akcja"] ?? "") == "zapisz_jednostke") {
    $numer = $_GET["numer"] ?? "";
    $jednostka = $_GET["jednostka"] ?? "";
    if (!isset($_SESSION["jednostki"])) {
        $_SESSION["jednostki"] = [];
    }
    $_SESSION["jednostki"]["{$typ}_{$numer}"] = $jednostka;
    exit("ok");
}

if(!isset($_SESSION["$typ"]))
{
    $_SESSION["$typ"]=0;
}

$_SESSION["$typ"]++;

echo $_SESSION["$typ"];

?>