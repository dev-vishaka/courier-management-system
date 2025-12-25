<!-- for 'courier' navbar, courier placing page -->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            margin: 0 auto;
            font-weight: bold;
            border-spacing: 5px 15px;
            width: 100%;
        }

        table .head {
            text-align: center;
            background-color: #00FF00;
            width: 100%;
            padding: 15px;
        }

        tr {
            /* display: ; */
            margin: 0 auto;
        }

        .main-form tr,
        td {
            padding: 10px 70px;
        }

        td input {
            width: 100%;
            padding: 5px 10px;
            border-radius: 7px;
            border: 1px solid rgba(0, 0, 0, 0.5);
        }

        .new {
            color: white !important;
            background: #212121;
            width: 20%;
            padding: 8px !important;
        }
    </style>
</head>

<body>
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <div>
            <table border="0px solid">
                <th colspan="5" class="head">Fill The Details Of Sender & Receiver</th>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <hr>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <th colspan="2">SENDER</th>
                    <th colspan="2">RECEIVER</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <div class="main-form">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="sname" placeholder="Sender Full Name" required></td>

                        <td>Name:</td>
                        <td><input type="text" name="rname" placeholder="Receiver Full Name" required></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="semail" value="<?php echo $email; ?>" readonly></td>

                        <td>Email:</td>
                        <td><input type="text" name="remail" placeholder="Receiver Email-Id" required></td>
                    </tr>
                    <tr>
                        <td>Phone-No:</td>
                        <td><input type="number" name="sphone" placeholder="Sender Number" required></td>

                        <td>Phone-No:</td>
                        <td><input type="number" name="rphone" placeholder="Receiver Number" required></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="textfield" name="saddress" placeholder="Sender Address" required></td>

                        <td>Address:</td>
                        <td><input type="textfield" name="raddress" placeholder="Receiver Address" required></td>
                    </tr>
                    <tr>
                        <td>Weight:</td>
                        <td><input type="number" name="wgt" placeholder="Weights in kg" required></td>

                        <td>Payment ID:</td>
                        <td><input type="number" name="billno" placeholder="Enter Paymnet ID" required></td>
                    </tr>
                    <tr>
                        <!-- <td>Date:</td><td><input type="date" name="date"></td> -->
                        <td>Date:</td>
                        <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly /></td>
                        <td>Items Image:</td>
                        <td><input type="file" name="simg"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center"><input class="btn new" type="submit" name="submit" value="Place Order"></td>
                    </tr>
                </div>
            </table>
        </div>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) { //if we'll not give this,it'will submit from with zero values.

    include('../dbconnection.php');

    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $sphone = $_POST['sphone'];
    $rphone = $_POST['rphone'];
    $sadd = $_POST['saddress'];
    $radd = $_POST['raddress'];
    $wgt = $_POST['wgt'];
    $billn = $_POST['billno'];
    $originalDate = $_POST['date'];
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid');";
    $run = mysqli_query($dbcon, $qry);

    // $trackqry= "INSERT INTO `track` (`u_id`, `c_id`) VALUES ('$uid', 'LAST_INSERT_ID()')";
    //$runtrack = mysqli_query($dbcon, $trackqry);

    if ($run == true) {

?> <script>
            alert('Order Placed Successfully :)');
            window.open('courierMenu.php', '_self');
        </script>
<?php
    }
}

?>