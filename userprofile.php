<?php 
session_start(); 
require './connection.php'; 

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Set a default username or handle the error accordingly
    $username = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | Vuna-Mart</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./resources/logo.svg">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include './header.php'; ?>
            <hr>

            <div class="col-12 justify-content-center">
                <div class="row mt-3">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <!-- Your user profile content here -->
                        <h2 class="fw-bold text-center">User Profile</h2>
                        <div class="card mb-3">
                            <div class="card-body">
                                <!-- Display user information, orders, etc. -->
                                <p>User Name: <?php if (isset($_SESSION['username'])) { echo $_SESSION['username']; } else { echo "No user data available"; } ?></p>
                                <p>Email: <?php echo $_SESSION['email']; ?></p>
                                <p>Address: <?php echo $_SESSION['address']; ?></p>
                                <!-- Add more user-related information here -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include './footer.php'; ?>
        </div>
    </div>

    <script src="./bootstrap.bundle.js"></script>
    <script src="./script.js"></script>
</body>

</html>
