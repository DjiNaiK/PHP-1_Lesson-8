<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<ul>
    <?php

    foreach ($this->data['records'] as $record):
        ?>
        <li>
            <h3>
                <a href="index.php?id=<?php echo $record->id; ?>">
                    <?php echo $record->title; ?>
                </a>
            </h3>
            <p>
             <?php echo $record->text; ?>
                <br>
                <i>Автор/Источник:
                    <?php echo $record->autor; ?>
                </i>
            </p>

        </li>
    <?php
    endforeach;
    ?>
</ul>

</body>
</html>