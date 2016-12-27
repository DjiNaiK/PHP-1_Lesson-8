<?php

require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

$db = new DB(include __DIR__ . '/cfgDB.php');

$view = new View();

$articleId = $_GET['id'] ?? 0;

if( $articleId > 0){

    $q = 'SELECT * FROM news WHERE id=:id';
        $qData[':id'] = $articleId;
        $view->assign('record', $db->query($q, $qData));
        $view->display(__DIR__ . '/template/article.php');
            //выводим конкретную новость

} else {

    $q = 'SELECT * FROM news ORDER BY id DESC';
        $view->assign('records', $db->query($q, []));
        $view->display(__DIR__ . '/template/index.php');
            //выводим все новости

}


//var_dump($db->execute('SELECT * FROM news'));
//результатом будет bool(true/false) как и требует задание 1.2

/*
$db->execute('INSERT INTO news
(id, title, text, autor)
VALUES
(NULL,
\'Медведев поручил запретить продажу непищевой продукции с алкоголем\',
\'Премье пентроль». Ограничение должны ввести сроком на 30 дней.\',
\'Lenta.ru\');');
*/
