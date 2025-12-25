<?php

session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/blackvariant/button-ui-requests-9/256/Parcel-icon.png" type="image/x-icon">
    <style>
        body {
            /* background-image: url('../images/1920_1080.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 80vh;
            width: 100%;
        }

        div h2 {
            color: orange;
            font-weight: bold;
            font-size: 60px;
        }

        div h4 {
            font-size: 25px;
            margin-bottom: 40px;
        }

        div p {
            width: 50%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div align='center' class="content">
        <h2>Welcome to ParcelPilot</h2>
        <h4>Empowering Seamless Deliveries</h4>
        <h3>About ParcelPilot</h3>
        <p>At ParcelPilot, we understand the importance of reliable and efficient courier services in today's fast-paced world. Our courier management system is designed to streamline the entire delivery process, ensuring that your packages reach their destination swiftly and securely.</p>
    </div>
</body>

</html>