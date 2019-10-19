<?php 
require 'controller/Controller.php';

$c = new Controller();
// var_dump(isset($_GET['page']));

if(isset($_GET['page']) ){
	$c->{$_GET['page']}();
}else {
	$c->index();
}