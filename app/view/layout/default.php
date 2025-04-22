<?php
use Imy\Core\Router;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестовое задание</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <?php include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'init')); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
