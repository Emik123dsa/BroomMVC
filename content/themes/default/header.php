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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave-bottom">
  <path fill="#2c3e50" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,128C274.3,117,343,107,411,112C480,117,549,139,617,154.7C685.7,171,754,181,823,170.7C891.4,160,960,128,1029,117.3C1097.1,107,1166,117,1234,149.3C1302.9,181,1371,235,1406,261.3L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave-header">
  <path fill="#ecf0f1" fill-opacity="1" d="M0,192L21.8,181.3C43.6,171,87,149,131,138.7C174.5,128,218,128,262,138.7C305.5,149,349,171,393,165.3C436.4,160,480,128,524,106.7C567.3,85,611,75,655,90.7C698.2,107,742,149,785,170.7C829.1,192,873,192,916,170.7C960,149,1004,107,1047,96C1090.9,85,1135,107,1178,117.3C1221.8,128,1265,128,1309,117.3C1352.7,107,1396,85,1418,74.7L1440,64L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
</svg>
    <header class="header">
   
        <div class="navbar">
            <div class="container">
                <div class="navbar_wrap">
                    <div class="navbar_wrap_title">
                        <h2 class="navbar_wrap_title">
                            Broom 
                        </h2>
                        <!-- /.navbar_wrap_title -->
                    </div>
                    <div class="navbar_wrap_content">
                        <nav class="navbar_wrap_list">
                            <ul class="navbar_wrap_ul">
                                <li class="navbar_wrap_li"><a href="javascript:void(0)" class="navbar_wrap_link"> About </a> <!-- /.navbar_wrap_link --></li>
                                <!-- /.navbar_wrap_li -->
                                <li class="navbar_wrap_li"><a href="javascript:void(0)" class="navbar_wrap_link"> Get Started</a> <!-- /.navbar_wrap_link --></li>
                                <!-- /.navbar_wrap_li -->
                                <li class="navbar_wrap_li"><a href="javascript:void(0)" class="navbar_wrap_link"> Documentation </a> <!-- /.navbar_wrap_link --></li>
                                <!-- /.navbar_wrap_li -->
                                
                                <!-- /.navbar_wrap_li -->
                            </ul>
                            <!-- /.navbar_wrap_ul -->
                        </nav>
                        <!-- /.navbar_wrap_list -->
                    </div>
                    <!-- /.navbar_wrap_content -->
                    <!-- /.navbar_wrap_title -->
                </div>
                <!-- /.navbar_wrap -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.navbar -->
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
                        <div iclass="dashboard_wrap_title_button">
                            <button class="dashbaord_get_started"> GET STARTED </button> <!-- /.dashbaord_get_started -->
                        </div>
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
