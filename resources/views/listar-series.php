<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries</title>
</head>
<body>
    <h1>Séries</h1>
    <li>
        <?php foreach($series as &$serie): ?>
            <li><?= $serie; ?></li>
        <?php endforeach; ?>
    </li>
</html>