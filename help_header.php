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
                        <?php echo $session_data["lname"]; ?>
                    </span>
                    <br>
                    <button onclick="location.href='./home.php';" class="btn btn-primary mt-3">Home</button>
                    <button onclick="location.href='./signOut.php';" class="btn btn-primary mt-3">Sign out</button>
                <?php } else { ?>
                    <a href="./index.php" class="text-decoration-none text-danger fw-bold">Sign in or Register</a>
                <?php } 
                ?>     
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
