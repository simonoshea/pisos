<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/core/lib/validate.php');
require_once 'user.php';


class User
{
    
    function auth_User($un, $pwd)
    {
        $mysql              = New Mysql();
        $ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));
        
        if ($ensure_credentials) {
            $_SESSION['status'] = 'authorized';
            $user               = New UserDetails($un);
            $_SESSION['user']   = $user;
            header("location: ../hq/");
        } else
            header("location: ../login.php?login_attempt=");
        
    }
    
    function log_User_Out()
    {
        if (isset($_SESSION['status'])) {
            session_unset();
            
            if (isset($_COOKIE[session_name()]))
                setcookie(session_name(), '', time() - 1000);
            session_destroy();
        }
        header("location: ../");
    }
    
    function confirm_User()
    {
        session_start();
        //if($_SESSION['status'] !='authorized') header("location: ../login.php?login_req=");
    }
    
    function user_Restrict()
    {
        session_start();
        if ($_SESSION['status'] != 'authorized')
            header("location: ../login.php?login_req=&dest=");
    }
    
}

