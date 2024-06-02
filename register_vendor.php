<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vunamart</title>
    <link rel="icon" href="resources/logo.svg">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
   
</head>

<body class="main-body">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center h-100">

            <!-- This is the header -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title" style="font-family:Cascadia Code SemiBold;font-size: 30px;letter-spacing:
                         3px;">Hi! Welcome to Vunamart</p>
                    </div>
                </div>
            </div>
            <!-- End of header -->

            <!-- Content -->
            <div class="col-12 p-3">
                <div class="row">
                    <div class="col-6 d-none d-lg-block background"></div>
                    <div class="col-12">
                        <!-- Vendor Registration Form -->
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="vendorName">Vendor Name:</label>
                            <input type="text" id="vendorName" name="vendorName" required>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" required>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" required></textarea>
                            <button type="submit">Register</button>
                        </form>
                        <!-- End of Vendor Registration Form -->
                    </div>
                </div>
            </div>
            <!-- End of content -->

        </div>
    </div>
</body>

</html>





<!-- STYLE -->

<style>
        /* Add your CSS styles here */
        .main-body {
            background-image: url("resources/background-body.svg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .logo {
            background-image: url("resources/logo.svg");
            height: 100px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        @font-face {
            font-family: "Quicksand";
            src: url("fonts/Quicksand-Medium.ttf");
        }

        /* Other CSS styles... */

        /* Adjust form layout */
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align form items to the left */
            justify-content: center; /* Center items vertically */
            height: 100vh; /* Full height of the viewport */
            padding: 20px; /* Add padding for spacing */
        }

        /* Style form labels and inputs */
        label {
            margin-bottom: 5px;
        }

        input[type="text"], 
        input[type="email"],
        input[type="password"], 
        textarea{
        width: 30%;
        padding: 5px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        float: left; /* Add this property */
        align-items: flex-start; /* Align form items to the left */

}

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>