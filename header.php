<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="col-12 bg-secondary-subtle">
        <div class="row mt-1 mb-1">
            <div class="offset-lg-1 col-12 col-lg-3 align-self-start mt-2">
                <?php if (isset($_SESSION['u'])) {
                    $session_data = $_SESSION['u']; ?>

                    <span class="text-lg-start">
                        <b>Welcome </b>
                        <?php echo $session_data["fname"] . " " . $session_data["lname"]; ?>
                    </span>
                    <br>
                    <button onclick="location.href='./home.php';" class="btn btn-primary mt-3">Home</button>
                    <button onclick="location.href='./signOut.php';" class="btn btn-primary mt-3">Sign out</button>
                    <button onclick="location.href='./help.php'" class="btn btn-primary mt-3">Help</button>
                <?php } else { ?>
                    <button onclick="location.href='./signin.php'" class="btn btn-primary mt-3">Register</button>
                    <button onclick="location.href='./signin.php'" class="btn btn-primary mt-3">Sign in</button>
                <?php } 
                ?>     
            </div>

            <div class="col-12 col-lg-3 offset-lg-5 align-self-end" style="text-align: center;">
                    <div class="row">
                        <div class="col-1 col-lg-3 mt-2">
                        <button onclick="location.href='./register_vendor.php'" class="btn btn-primary mt-3">Become a vendor </button>
                        
                        </div>

                        <div class="col-12 col-lg-6 dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">My Vuna shop</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./userProfile.php">My Profile</a></li>
                                <li><a class="dropdown-item" href="./addProduct.php">Add New Product</a></li>
                                <li><a class="dropdown-item" href="#">My Sellings</a></li>
                                <li><a class="dropdown-item" href="./myProducts.php">My Products</a></li>
                                <li><a class="dropdown-item" href="#">Watchlist</a></li>
                                <li><a class="dropdown-item" href="#">Purchased History</a></li>
                                <li><a class="dropdown-item" href="#">Messages</a></li>
                                <li><a class="dropdown-item" href="help.php">Contact Admin</a></li>
                            </ul>
                        </div>

                        <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-1 cart-icon"></div>
                    </div>
            </div>
        </div>
    </div>

    <script src="./script.js"></script>
    <script>
        function signOut() {
            // Perform sign out actions, such as clearing session data or redirecting to a sign-out page
            // Example: window.location.href = "./signOut.php";
            alert("Signing out!"); // Placeholder for demonstration
        }
    </script>
</body>
</html>
