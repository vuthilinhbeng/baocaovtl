<?php
    session_start();
    if( isset($_SESSION['TEN'])){
        unset($_SESSION['TEN']);
    }
    header('location:dangnhapadmin.php');
?>