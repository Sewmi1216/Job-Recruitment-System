<?php
require '../db/db_connection.php';
session_start();
$user ="";
if(isset($_SESSION["user"]) && isset($_SESSION["id"])){
   $id =$_SESSION["id"];
}else{
   header("location:showpost.php");
}
?>

<!DOCTYPE html>

<head>
    <title>header</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav>
        <div class="nav-wrap">
            <ul id="nav">
                <li><a href="../logout.php" class="logout">Logout</a></li>
                <li><a href="../profile/companyProfile.php">Profile</a></li>
                <li><a href="feedback.php">Contact Us</a></li>
                <li><a href="viewApplications.php">View Applications</a></li>
                <li><a href="application.php">Post Ads</a></li>
                <li><a href="showpost.php">Home</a></li>
                <li class="logo"><img src="../images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
            </ul>
        </div>
    </nav>

</body>
</html>