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


require('./view.php');
