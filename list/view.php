<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions bancaires de l'année</title>
</head>

<body>
    <ul>
        <?php foreach ($transactions as $key => $transaction) : ?>
            <!--$key va retourner la clé de l'élément du tableau qui est actuellement pointé-->
            <li>
                <a href="../item?id=<?= $key ?>">
                    <?= $transaction['date'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div>
        <a href="../edit">Nouvelle transaction</a>
    </div>
</body>

</html>