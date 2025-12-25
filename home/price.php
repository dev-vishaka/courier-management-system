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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            width: 30%;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
            border-spacing: 5px 5px;
            border-collapse: collapse;
        }

        table tr {
            text-align: center;
        }

        table tr th,
        td {
            padding: 10px;
        }

        div ol {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 30px;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <table border="2">
        <tr style="background-color: black;font-size:25px;color: #FF1493;">
            <th>Weight in Kg</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>0-1</td>
            <td>120</td>
        </tr>
        <tr>
            <td>1-2</td>
            <td>200</td>
        </tr>
        <tr>
            <td>2-4</td>
            <td>250</td>
        </tr>
        <tr>
            <td>4-5</td>
            <td>300</td>
        </tr>
        <tr>
            <td>5-7</td>
            <td>400</td>
        </tr>
        <tr>
            <td>7-above</td>
            <td>500</td>
        </tr>
    </table>
    <h3 align="center" style="margin-top:50px;"> As per your courier's weight pay the amount on:</h3>
    <div>
        <ol>
            <li>UPI: abcd@sbi.com</li>
            <li>GPay: 6362786223</li>
            <li>PhnPay: 3565656555</li>
        </ol>
    </div>
</body>

</html>