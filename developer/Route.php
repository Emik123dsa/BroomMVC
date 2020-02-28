<?php 

$this->router->add('login', '/developer/login/','LoginController:loginRender');
$this->router->add('login-addition', '/developer/login','LoginController:loginRender');

$this->router->add('interface', '/developer/', 'InterfaceController:interface');

$this->router->add('logout', '/developer/logout/', 'DeveloperController:logout');

?>
