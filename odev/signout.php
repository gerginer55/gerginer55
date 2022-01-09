<?php
session_start();

unset($_SESSION["user"]);
unset($_SESSION["loggedin"]);
header("Location:".  "http://".$_SERVER['HTTP_HOST']."/odev/signin");
?>