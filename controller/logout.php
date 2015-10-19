<?php
/**
 * Created by PhpStorm.
 * User: Lok Thapa
 * Date: 9/22/15
 * Time: 8:11 PM
 */


session_start();
session_destroy();

header("Location: ../view/login.php");