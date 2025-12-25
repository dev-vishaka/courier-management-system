<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}

?>
<?php include('header.php');
include('../dbconnection.php');
$idd = $_GET['sidd'];

$qryy = "SELECT * FROM `courier` WHERE `c_id`='$idd'";
$run = mysqli_query($dbcon, $qryy);
$data = mysqli_fetch_assoc($run);
$stdate = $data['date'];
$tddate = date('Y-m-d');

if ($stdate == $tddate) {
?>
    <style>
        h1 {
            margin: 100px;
            background-color: #E89334;
            color: #000;
            text-align: center;
            border-radius: 50px;
            padding: 10px;
            font-size: 30px;
            font-weight: bold;
        }

        .new {
            color: white !important;
            background: #212121;
            width: 15%;
            padding: 8px !important;
        }

        .msg {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <h1>Status >> On The Way...</h1>
    <br />
    <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" class="btn new">Go Back</button>
    </div>
<?php
} else {
?>
    <h1>Status >> Items Delivered..<br />
        <p class="msg">HAVE A NICE DAY</p>
    </h1>
    <br />
    <hr />
    <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:green;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
    </div>
<?php
}
?>