<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <?php include './header.html'; ?>
        <div class="container main-content">
            <div class="row">
                <?php include './side.html'; ?>
                <?php include './Content/main.html'; ?>
            </div>
        </div>
        <?php include './fotter.html'; ?>
    </body>
</html>

