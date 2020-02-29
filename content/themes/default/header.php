<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map" type="text/css">
    <?php Asset::renderCss('css/style'); ?>
</head> 
<div class="background-flex">
    <div class="background-flex_wrap">

    </div>
    <!-- /.background-flex_wrap -->
</div>
<!-- /.background-flex -->
<body>
    <header class="header">
        <div class="dashboard">
            <div class="container">
                <div class="dashboard_wrap">
                    
                    <div class="dashboard_wrap_content">
                        <div class="dashboard_wrap_content_image">
                            <img id = "broomMove" src="<?php Asset::renderImage('img/broom', 'png')?>" alt="Broom" class="dashboard_broom"/>
                            <!-- /.dashboard_wrap_content -->
                        </div>
                        <!-- /.dashboard_wrap_content_image -->
                    </div>
                    <div class="dashboard_wrap_title">
                        <h1 class="dashboard_wrap_name">
                            Welcome to The Broom
                        </h1>
                        <div iclass="dashboard_wrap_title_button"><button class="dashbaord_get_started"> GET STARTED </button> <!-- /.dashbaord_get_started --></div>
                        <!-- /.dashboard_wrap_title_button -->
                        <!-- /.dashboard_wrap_name -->
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
