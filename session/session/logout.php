<?php 
    session_start();
    unset($_SESSION['home']);
    header("location:./index.php");


