<?php require('partials/head.php') ?>
    <div>
        <ul>
            <?php if (!empty($todos)) {
                foreach ($todos as $todo): ?>
                    <li>
                        <?php if ($todo->completed): ?>
                            <strike> <?= $todo->description ?></strike>
                        <?php else: ?>
                            <?= $todo->description ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach;
            } ?>
        </ul>
    </div>
    <div>
        <h1>
            Submit A Todo
        </h1>
        <form method="POST" action="/todo">
            <input name="description">
            <label for="completed">Completed :</label>
            <select name="completed">
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
            <button type="submit">submit</button>
        </form>
    </div>

<?php require('partials/footer.php') ?>