<?php
session_start();
include 'connection.php'; // Your database connection script

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vunamart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Add New Product</h2>
        <form action="save_product.php" method="POST">
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Shoes">Shoes</option>
                    <option value="Cloths">Cloths</option>
                    <option value="Watch">Watch</option>
                    <option value="Necklace">Necklace</option>
                    <option value="Perfume">Perfume</option>
                    <option value="Wig">Wig</option>

                    <!-- Add more categories as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include './footer.php';
.?>