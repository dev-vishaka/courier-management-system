<?php

include('dbconnection.php');
session_start();
$gd = $_SESSION['gid'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background-image: url('images/Reset.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
            font-family: poppins;
        }

        table {
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            border-spacing: 50px 30px;
            height: 90vh;
        }

        table th {
            text-align: center;
            font-size: 35px;
            width: 300px;
            height: 70px;
            font-weight: bold;
        }

        table tr td input {
            padding: 7px 10px;
            font-size: 17px;
            border-radius: 50px;
            border: 1px solid rgba(0, 0, 0, 0.5);
        }

        .btn {
            background-color: black;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="reset.php" method="POST">
        <table border="0px" ">
            <th colspan=" 3">Reset Your Password</th>
            <tr>
                <td colspan="2" style="font-size: 20px;font-weight:bold">New Password</td>
                <td><input type="password" name="pass" placeholder="Enter New Password" required /></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input class="btn" type="submit" name="submit" value="Update" />
                </td>
            </tr>
        </table>

    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $password = $_POST['pass'];

    $qryd = "UPDATE `login` SET `password` = '$password' WHERE `u_id` = '$gd'";
    $run = mysqli_query($dbcon, $qryd);

    if ($run == true) {
?> <script>
            alert('Password Updated Successfully :)');
            window.open('logout.php', '_self');
        </script>
<?php
    }
}
?>