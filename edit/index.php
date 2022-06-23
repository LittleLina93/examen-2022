<?php

require('../liste_transactions.php');

$id = null;
$transaction = null;

if (isset($_GET['id'])) {
    $id = +$_GET['id'];

    if (isset($transactions[$id])) {
        $transaction = $transactions[$id];
    }
}


function isValidPosition($position, $max)
{
    return (isset($position) && is_numeric($position) && $position >= 0 && $position < $max);
}

function isValidDate($jour, $mois, $annee)
{
    return checkdate($mois, $jour, $annee);
}
function isValidNumber($number)
{
    return (isset($number) && is_numeric($number) && $number > 0);
}


$error = false;
$error_ddn;
$error_montant;

if (isset($_POST['sauver'])) {

    $contact = isset($_POST["nom"]) ? $_POST["nom"] : null;
    $montant= isset($_POST["montant"])? +$_POST["montant"] : null;
    $ddn = [
        isset($_POST["jour"]) ? $_POST["jour"] : null,
        isset($_POST["mois"]) ? $_POST["mois"] : null,
        isset($_POST["annee"]) ? $_POST["annee"] : null,
    ];

    if (!isValidPosition($id, count($transactions))) {
        $error = true;
    }
    if (!isValidDate($ddn[0], $ddn[1], $ddn[2])) {
        $error = true;
        $error_ddn = "La date est invalide";
    }
    if (!isValidNumber($montant)) {
        $error = true;
        $error_montant = "Le nombre d'enfant choisi est incorrect";
    }

    if (!$error) {
        header('Location: ../list');
        exit();
    }

    $timestamp = mktime(0, 0, 0, $ddn[1], $ddn[0], $ddn[2]);
    $formattedDate = date('d/m/Y', $timestamp);

    $transaction = [
        "date" => $formattedDate,
        "emetteur" => $emetteur,
        "destinataire" =>  $destinataire,
        "montant" => $montant
    ];

    $contact = [
        "id" => $id,
        "nom" => $nom,
        "prenom" => $prenom,
        "compte" => $compte
    ];
}

require('./view.php');
