<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/28/2018
 * Time: 18:40
 */

session_start();
session_destroy();
header("location: index.php");