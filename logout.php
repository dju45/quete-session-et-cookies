<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 15/04/18
 * Time: 15:01
 */
session_start();
setcookie('pseudo','', time() -3600);
session_destroy();
header('Location: login.php');
