<?php
session_start();
session_destroy();
header('Location: ../View/vista_login.html');
?>