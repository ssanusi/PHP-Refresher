<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logic and Condition</title>
    <style>
        header {
            background-color: beige;
            padding: 2rem;
        }
    </style>
</head>
<body>
<header>
    <h1>Task Executed Today : If Statement</h1>
    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Assigned_To: </strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Due: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Completed: </strong> <?= $task['status']  ? 'Completed' : 'InComplete'?>
        </li>
    </ul>
    <h1>Task Executed Today : Tenary Operator</h1>
    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Assigned_To: </strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Due: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Completed: </strong>
            <?php if($task['status']):?>
               <span class="icon">&#9989</span>
            <?php else :?>
                <span> Incomplete</span>
            <?php endif; ?>
        </li>
    </ul>
</header>


</body>
</html>