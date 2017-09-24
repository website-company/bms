<?php
/**
 * File For: pizza-web-app
 * File Name: index.php.
 * Author: Mike Giammattei
 * Created On: 9/23/2017, 7:48 PM
 */;
 session_start();
include_once('classes/class.Controller.php');
Sessions::setSession('login',true);
//Sessions::destroySession('login');
$Controller = new Controller();
echo $Controller->controller();