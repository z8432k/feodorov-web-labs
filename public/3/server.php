<?php ini_set("display_errors", 0); ?>

<!doctype html>

<html lang="ru">
<head>
    <meta charset="utf-8">

    <title>Большие данные</title>

    <style>
        ul {
            list-style-image: url('assets/img/sqpurple.gif');
        }
    </style>
</head>

<body>

<header>
    <h1>Результат</h1>
</header>

<nav>
    <a href="index.html">Стр 1</a>
</nav>

<div>
    <ul>
        <li>ФИО: <?= $_GET['user'] ?></li>
        <li>Метод анализа: <?= $_GET['method'] ?></li>
        <li>Практика применения: <?= $_GET['practice'] ?></li>
        <li>Технологии:
            <ul>
                <?php foreach ($_GET['tech'] as $value): ?>
                    <li><?= $value ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</div>

</body>
</html>