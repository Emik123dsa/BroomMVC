<?php 

$this->router->add('home', '/', 'HomeController:index');
$this->router->add('about', '/about', 'HomeController:about');
$this->router->add('news', '/news/(id:int)', 'HomeController:news');

?>

