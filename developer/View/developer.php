<div class="navbar">
    <div class="container">
        <div class="navbar_wrap">
            <div class="navbar_wrap_list">
                <nav class="navbar_list">
                    <ul class="ul_list">
<?foreach($users as $user):?>

                        <li class="li_list"> <?= $user->email ?></li>
                        <li class="li_list"> <?= $user->password ?></li>
                        
<?endforeach;?>


                        <!-- /.li_list -->
                    </ul>
                    <!-- /.ul_list -->
                </nav>
                <!-- /.navbar_list -->
            </div>
            <!-- /.navbar_wrap_list -->
        </div>
        <!-- /.navbar_wrap -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->