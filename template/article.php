<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $this->data['record'][0]->title; ?>
    </title>
</head>
<body>

<p><a href="index.php">Вернуться к новостям</a> </p>

<h3><?php echo $this->data['record'][0]->title; ?></h3>

<p>
    <?php echo $this->data['record'][0]->text; ?>
</p>
<i>
    <?php echo $this->data['record'][0]->autor; ?>
</i>

</body>
</html>