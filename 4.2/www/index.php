<?php
$baseDir = realpath(dirname(__FILE__) . '\..');
include $baseDir . '\lib\controller\Controller.php';
$controller = new Controller();
$controller->invoke();