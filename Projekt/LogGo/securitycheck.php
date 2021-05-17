<?php

    include "config.php";

    session_start();

    $user_answer = $_POST['answer'];

    if($user_answer == 4){
        header("Location: loginsuccess.php");
    } else { 
        header("Location: logout.php"); 
    }

?>