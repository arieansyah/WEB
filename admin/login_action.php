<?php

include '../db/userlogin.php';

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    setcookie('username');
    setcookie('status');
    header('location:login.php');
} else {
    
    $auth = $user->loginAuth($_POST['username'], md5($_POST['password']));
    if($auth != NULL){
        setcookie('username', $auth['username']);
        setcookie('status', 'logged_in');

        header('location:admin.php');
    } else {
        header('location:login.php');
    }
}
