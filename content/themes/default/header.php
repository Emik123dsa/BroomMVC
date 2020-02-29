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
        <div class="dashboard">
            <div class="container">
                <div class="dashboard_wrap">
                    <div class="dashboard_wrap_title">
                        <h1 class="dashboard_wrap_name">
                            Welcome to The BroomMVC
                        </h1>
                        <!-- /.dashboard_wrap_name -->
                    </div>
                    <div class="dashboard_wrap_content">
                        <div class="dashboard_wrap_content_image">
                            <img src="<?php Asset::renderImage('img/broom', 'png')?>" alt="Broom" />
                            <!-- /.dashboard_wrap_content -->
                        </div>
                        <!-- /.dashboard_wrap_content_image -->
                    </div>
                    <!-- /.dashboard_wrap_title -->
                </div>
                <!-- /.dashboard_wrap -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dashboard -->
       
    </header>
    <!-- /.header -->
