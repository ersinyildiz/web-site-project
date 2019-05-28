<?php
    session_start();
    session_destroy();
    header("location:u-admin.php");
?>