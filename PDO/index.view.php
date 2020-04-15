<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Demo</title>
</head>
<body>
<div>
    <ul>
        <?php foreach ($todos as $todo): ?>
           <li>
               <?php if ($todo->completed): ?>
                   <strike> <?= $todo->description ?></strike>
               <?php else: ?>
                    <?= $todo->description ?>
               <?php endif; ?>
           </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>