<?php
include('ace-5-config.php');
unset($_SESSION['facebook_access_token']);
unset($_SESSION['userData']);
session_destroy();
header('Location: ace-5.php')
?>