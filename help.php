<?php session_start();
require './connection.php'; ?>

<!DOCTYPE html>

<html>

<head>

    <title>Vunamart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="./resources/logo.svg" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include './help_header.php'; ?>
     

            
            <?php include './footer.php'; ?>
        </div>
    </div>

    <script src="./bootstrap.bundle.js"></script>
    <script src="./script.js"></script>

</body>

</html>
