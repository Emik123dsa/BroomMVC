<?php 
$this->router->add('login', '/developer/login/','LoginController:login');
$this->router->add('login-addition', '/developer/login','LoginController:login');
$this->router->add('login-interface', '/developer/', 'LoginController:loginInterface');

?>
