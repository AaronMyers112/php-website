<?php
    session_start();
    $title_name = $_SESSION['title_name'];
    $username = $_GET['username'];
    $password = $_GET['password'];

    function login($username = 'User', $password = 'admin') {  
        if($username == $_SESSION['title_name'] || $password != 'admin') {
            return false;
        }
        else {
            return true;
        }
    }
    if(login($username, $password)){
        $_SESSION['login'] = true;
        header("Location: index.php");
    }
?>