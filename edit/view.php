<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="" enctype="multipart/form-data" method="POST">
        <div>
            Liste de contacts
                <select name="contact" id="contacts">
                    <?php foreach ($contacts as $key => $value) : ?>
                        <option name="contact[]" value="<?= $key ?>" <?= in_array($key, $contact['nom']) ? 'checked' : '' ?> <?= $value ?>></option>
                    <?php endforeach ?>
                </select>
        </div>
        <div>
            <label>
                Montant
                <input type="number" name="montant" value="<?= $transaction['montant'] ?>" />
                <?php if (isset($error_montant)) : ?>
                    <p><?= $error_montant ?></p>
                <?php endif; ?>
            </label>
        </div>
        <div>
            <label>
                Date de la transaction
                <?php
                $date_array = date_parse_from_format('d/m/Y', $transaction['ddn']);
                ?>
                <input type="number" name="jour" value="<?= $date_array['day'] ?>" />
                <select name="mois">
                    <?php foreach (range(1, 12) as $currentMonth) : ?>
                        <option value="<?= $currentMonth ?>" <?= +$date_array['month'] === $currentMonth ? 'selected' : '' ?>><?= $currentMonth ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="number" name="annee" value="<?= $date_array['year'] ?>" />
                <?php if (isset($error_ddn)) : ?>
                    <p><?= $error_ddn ?></p>
                <?php endif; ?>
            </label>
        </div>
        <input type="submit" name="sauver" value="Sauver"/>
        <?php redirect('../list', true) ?>
    </form>
</body>

</html>