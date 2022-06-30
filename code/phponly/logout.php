<?php
    session_start();

    //need testing

    if(session_destroy()){
        header("location: ../index.php");
    }
?>