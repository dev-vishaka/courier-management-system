<!-- when admin click delete data link, page with filter options-->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('https://img.freepik.com/free-photo/supply-chain-representation-with-van-top-view_23-2149853168.jpg?w=1060&t=st=1704979648~exp=1704980248~hmac=d7a8fabedc4d8b55577ad701e9767889035496cddd4b332480ccc23783838ae7');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center top;
        font-family: poppins;
    }

    .options {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .options a {
        color: #212121;
        font-weight: bold;
        font-size: 15px;
        text-decoration: none;
        background-color: #eee;
        padding: 5px 15px;
        border-radius: 50px;
    }

    .options h1 {
        font-size: 25px;
    }

    .info-cs {
        margin-top: 70px;
    }

    table {
        width: 90%;
        border-radius: 10px;
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        font-weight: bold;
        border-spacing: 5px 10px;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    table .table-head th {
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 50px;
    }

    tr {
        font-size: 17px;
    }
</style>
<div class="admintitle">
    <div class="options">
        <a href="dashboard.php">Dashbord</a>
        <h1 align='center'>Courier Information</h1>
        <a href=" logout.php">Log Out</a>
    </div>
</div>

<div class="info-cs">
    <table border="2">
        <tr class="table-head">
            <th>No.</th>
            <th>Items Image</th>
            <th>Sender Name</th>
            <th>Receiver Name</th>
            <th>Sender Email</th>
            <th>Action</th>
        </tr>

        <?php
        include('../dbconnection.php');

        $qryd = "SELECT * FROM `courier`";
        $run = mysqli_query($dbcon, $qryd);

        if (mysqli_num_rows($run) < 1) {
            echo "<tr><td colspan='6'>&nbsp;&nbsp; No record found..</td></tr>";
        } else {
            $count = 0;
            while ($data = mysqli_fetch_assoc($run)) {
                $count++;
        ?>
                <tr align="center">
                    <td><?php echo $count; ?></td>
                    <td><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;margin: 10px;border-radius: 10px;box-shadow: 0 0 5px rgba(0,0,0,0.5);" /> </td>
                    <td><?php echo $data['sname']; ?></td>
                    <td><?php echo $data['rname']; ?></td>
                    <td><?php echo $data['semail']; ?></td>
                    <td><a href="datadeleted.php?bb=<?php echo $data['billno']; ?>" style="text-decoration: none;">Delete</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>