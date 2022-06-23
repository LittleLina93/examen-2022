<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la transaction</title>
</head>
<body>
    
    <?php if(!isset($id)): ?>
        <p>Veuillez fournir un id de transaction</p>
    <?php elseif(!isset($transaction)): ?>
        <p>Pas de transaction connu avec cet id</p>
    <?php else: ?>
        <ul>
            <?php foreach ($contacts as $key => $contact): ?>
                <li><?= ($contact['nom']) ?></li>
                <li><?= ($contact['prenom']) ?></li>
                <li><?= ($contact['compte']) ?></li>
            <?php endforeach; ?>
            <?php if ?>    
        </ul>
    <?php endif; ?>

</body>
</html>