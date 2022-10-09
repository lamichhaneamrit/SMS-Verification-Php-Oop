<?php

include "/opt/lampp/htdocs/All_php_1/SMS-Verification-Php-Oop/core/init.php";
//checking if the user is logged in
if (!$userObj->isLoggedIn()) {
    $userObj->redirect('index.php');
} else {
    $userObj->logout();
}