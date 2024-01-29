<?php

session_start();

session_destroy();

header('location: /project/home/home.php');

?>