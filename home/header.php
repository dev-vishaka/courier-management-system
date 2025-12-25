<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Navbar with Logo Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: poppins;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .bs-example {
            margin: 0;
        }

        .navbar {
            background: #000;
        }

        .nav-link.active,
        .nav-item,
        .nav-link {
            color: white !important;
            /* font-weight: bold; */
            font-size: 17px;
        }

        .btn {
            background: #fff;
            color: #000 !important;
            margin: 0 10px;
            padding: 3px 15px !important;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="home.php" class="navbar-brand">
                <img src="https://icons.iconarchive.com/icons/blackvariant/button-ui-requests-9/256/Parcel-icon.png" height="50" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="home.php" class="nav-item nav-link active" style="color: white;">Home</a>
                    <a href="price.php" class="nav-item nav-link active">Price</a>
                    <a href="courierMenu.php" class="nav-item nav-link">Courier</a>
                    <a href="trackMenu.php" class="nav-item nav-link">Track</a>

                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                    <a href="contactUS.php" class="nav-item nav-link">Contact</a>
                    <!-- mailto:premkumar1215225@gmail.com -->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="../admin/logout.php" class="nav-item nav-link btn">Admin</a>
                    <a href="../logout.php" class="nav-item nav-link btn">Log Out</a>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>
<?php include('footer.php'); ?>