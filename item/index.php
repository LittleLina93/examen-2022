<?php

require('../liste_transactions.php');

$id = null;
$transaction = null;
$contact = null;
if (isset($_GET['id'])) {
    $id = +$_GET['id'];

    if (isset($transactions[$id])) {
        $transaction = $transactions[$id];
    }
}

if (isset($_GET['id'])) {
    $id = +$_GET['id'];

    if (isset($contacts[$id])) {
        $contact = $contacts[$id];
    }
}


require('./view.php');
