<?php
session_start();
require './connection.php';

// Destroy the session
session_destroy();

// Redirect to the homepage
header('Location: ./index.php');
exit;
?>
