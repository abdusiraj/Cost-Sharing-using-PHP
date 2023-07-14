<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["id"]);
header("Location:index.html");
?>