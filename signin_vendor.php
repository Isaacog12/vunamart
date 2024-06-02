<?php
// Include the database connection file
require_once 'connection.php';

$conn = new mysqli('localhost', 'tife', 'Iayush2003.', 'tife', 3306);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the input (you can add more validation as needed)
    if (empty($email) || empty($password)) {
        // Handle empty fields error
        $error = "Email and password are required.";
    } else {
        // Prepare the query
        $query = "SELECT * FROM vendors WHERE email = ? AND password = ?";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Store the result
        mysqli_stmt_store_result($stmt);

        // Check if the vendor exists
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Vendor sign-in successful
            $success = "Sign-in successful!";
            // Redirect to the vendor dashboard
            header("Location: vdashboard.php");
            exit; // Make sure to exit after redirection
        } else {
            // Vendor not found
            $error = "Invalid email or password. Please try again.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags, title, and other head content -->
</head>

<body>
    <div class="container">
        <h2>Sign In as a Vendor</h2>
        <!-- Display success or error message if any -->
        <?php if (isset($success)) : ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <!-- Vendor Sign-in Form -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <form action="vdashboard.php" method="post">
	<button type="submit">Sign In</button>
</form>

        </form>
    </div>
</body>

</html>
