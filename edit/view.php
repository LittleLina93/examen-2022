<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" metho="POST">
        <div>
            <label>
                Liste de contacts
                <select name="contact" id="contacts">
                    <option value="">--Choisissez--</option>
                    <?php foreach($contacts as $key => $contact): ?>
                    <option value="<?php $contact['nom']['prenom'] ?>"></option>
                    <?php endforeach ?>
                </select>
            </label>
        </div>
        <label>
                Date de la transaction
                <?php
                    $date_array = date_parse_from_format('d/m/Y', $transaction['ddn']);
                ?>
                <input type="number" name="jour" value="<?= $date_array['day'] ?>" />
                <select name="mois">
                    <?php foreach(range(1, 12) as $currentMonth): ?>
                        <option value="<?= $currentMonth ?>" <?= +$date_array['month'] === $currentMonth ? 'selected' : '' ?> ><?= $currentMonth ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="number" name="annee" value="<?= $date_array['year'] ?>" />
                <?php if(isset($error_ddn)): ?>
                    <p><?= $error_ddn ?></p>
                <?php endif; ?>
            </label>

</form>
</body>
</html>