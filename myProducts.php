<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="(link unavailable)">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">My Products</h2>
        <?php
        // Check if user is signed in
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            // Connect to database
            $conn = mysqli_connect("localhost", "tife", "Iayush2003.", "tife", 3306);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // Retrieve products for signed-in user
            $query = "SELECT * FROM products WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Product Name</th>";
                echo "<th>Category</th>";
                echo "<th>Price</th>";
                echo "<th>Description</th>";
                echo "<th>Image</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td><img src='" . $row['image'] . "' width='50' height='50'></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "No products found.";
            }
            mysqli_close($conn);
        } else {
            echo "Please sign in to view your products.";
        }
        ?>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="(link unavailable)"></script>
    <script src="(link unavailable)"></script>
    <script src="(link unavailable)"></script>
</body>
</html>

