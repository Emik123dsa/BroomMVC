<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php Asset::renderCss('css/style'); ?>
</head>
<body>
    <header class="header">
        Hello
        <img src="<?php Asset::renderImage('img/hello', 'png') ?>" alt="hello">
    </header>
    <!-- /.header -->
