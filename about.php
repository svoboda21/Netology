Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
@svoboda21
Sign out
2
0 0 netology-code/php-homeworks
Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights
php-homeworks/intro/resourses/intro.php
63b6d7e  on 4 Apr
@ikrieg ikrieg переименованы названия домашних заданий

36 lines (34 sloc)  923 Bytes
<?php
$name = 'Дима';
$age = 32;
$email = 'dfitiskin@gmail.com';
$city = 'Самара';
$about = 'LAMP стэк разработчик';
?>
<!DOCTYPE>
<html lang="ru">
<head>
    <title><?= $name . ' – ' . $about ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>Страница пользователя <?= $name ?></h1>
<dl>
    <dt>Имя</dt>
    <dd><?= $name ?></dd>
    <dt>Возраст</dt>
    <dd><?= $age ?></dd>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
    <dt>Город</dt>
    <dd><?= $city ?></dd>
    <dt>О себе</dt>
    <dd><?= $about ?></dd>
</dl>
</body>
</html>
© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
Press h to open a hovercard with more details.