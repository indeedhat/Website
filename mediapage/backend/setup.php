<?php

set_error_handler(function($code, $msg, $file, $line){
    die("Whoopsie! There seems to be a problem in $file on line $line!<br>Something to do with '$msg' or something.");
});

$mysql_username = "root";
$mysql_password = 'PRIVATE';

$GLOBALS['mysqli'] = mysqli_connect("localhost", $mysql_username, $mysql_password, "mediapage");

function query($q){
    return $GLOBALS['mysqli']->query($q);
}

function escapeSql($s){
    return $GLOBALS['mysqli']->real_escape_string($s);
}

function getCurrentUser(){
    static $user = false;
    if($user === false){

        if(!isset($_COOKIE['login_token'])) return null;

        $token = $_COOKIE['login_token'];
        $token = escapeSql($token);
        $result = query("select * from user_logins where `code` = '$token'");
        if(mysqli_num_rows($result) == 0) return null;
        $row = mysqli_fetch_assoc($result);
        $userId = $row['userId'];

        $result = query("select * from user_accounts where `id` = '$userId'");

        if(mysqli_num_rows($result) == 0) return null;

        $user = mysqli_fetch_assoc($result);

    }
    return $user;
}
?>
