<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
    <style>
        header {
            background-color: beige;
            padding: 2rem;
        }
    </style>
</head>
<body>
<header>
    <ul>
        <?php foreach ($names as $name) {
            echo "<li>$name</li>";
        } ?>
    </ul>

    <ul>
        <?php foreach ($names as $name): ?>
            <li><strong><?= ucwords($name) ?></strong></li>
        <?php endforeach; ?>
    </ul>

    <ol>
        <?php foreach ($person

                       as $feature => $value): ?>
            <li><strong><?= ucwords($feature) ?></strong>: <?= $value ?></li>

        <?php endforeach; ?>

    </ol>
    <h1>Task for the day</h1>
    <ul>
        <?php foreach ($task as $item => $value): ?>
            <li><strong><?= ucwords($item) ?></strong> : <?= $value ?></li>
        <?php endforeach; ?>

    </ul>
</header>
</body>
</html>
