<!-- admin dashbord page with options for admin -->

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

    .admin-opt {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0px 15px 0 rgba(0, 0, 0, 0.37);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 20px;
        width: 40%;
        color: white;
        font-weight: bold;
        font-size: 20px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 200px;
    }

    .admin-opt a {
        color: white;
        text-decoration: none;
        background-color: #212121;
        padding: 7px 20px;
        border-radius: 50px;
        transition: all 0.3s ease;

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

    .main-opt {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
</style>

<body>


    <div class="admintitle">
        <div class="options">
            <a href="../index.php">User Login</a>
            <h1 align='center'>Welcome To Admin Dashbord</h1>
            <a href=" logout.php">Log Out</a>
        </div>
    </div>
    <div align="center" class="main-opt">
        <form class=" admin-opt">
            <a href="deletedata.php">Delete Data</a>
            <a href="deleteusers.php">Delete Users</a>
        </form>

    </div>
</body>

</html>