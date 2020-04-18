<?php require('partials/head.php') ?>
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
<?php require('partials/footer.php') ?>