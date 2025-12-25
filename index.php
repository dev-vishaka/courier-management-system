<?php

require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
?>
        <script>
            alert("Opps! plz Enter Your Username and Pswd again..");
            window.open('index.php', '_self');
        </script> <?php
                } else {
                    $data = mysqli_fetch_assoc($run);
                    $id = $data['u_id'];    //fetch id value of user
                    $email = $data['email'];
                    $_SESSION['uid'] = $id;   //now we can use it until session destroy
                    $_SESSION['emm'] = $email;
                    ?>
        <script>
            alert("स्वागत हैं आपका 🙏");
            window.open('home/home.php', '_self');
            // changes made here
        </script> <?php

                }
            }
                    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParcelPilot - Login</title>
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/blackvariant/button-ui-requests-9/256/Parcel-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            /* background-image: url('images/10.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
            font-family: poppins;
        }

        h1 {
            padding: 20px 0;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 30px;
            background: black;
        }

        div h5 a {
            float: right;
            margin-right: 40px;
            color: white;
            background: #000;
            padding: 10px 15px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: bold;
        }

        .headline {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: orange;
        }
    </style>
</head>

<body>
    <h1>ParcelPilot Courier Service</h1>
    <br />
    <P class="headline">The Fastest Courier Service Ever</P>
    <div>
        <h5><a href="admin/adminlogin.php">Admin Login</a></h5>
    </div>
    <div class="container" style="margin-top: 60px; width:50%;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #273c75;font-weight: bold;">Login</h2>
                <p style="color:#e84118;">Please Fill To Login ⮯⮯</p>
                <!-- <?php echo $error; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Username / Email-Id" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Log In" />
                        <button onclick="window.location.href='resetpswd.php'" class="btn btn-danger" style="cursor:pointer">Reset Password</button>
                    </div>
                    <p style="color: #e84118;">Don't have an account?⮞➤ <a href="register.php">Register here</a>.</p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>