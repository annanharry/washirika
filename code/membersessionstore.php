<?php
    include "phponly/connect.php";
    session_start();

    $search = $_POST['search'];
    $_SESSION['search_id'] = $search;

    header("location: memberdash.php");
?>