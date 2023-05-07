<?php
session_start();
$uname=$_SESSION['userid'];
$mysqli = require "../PHP/DataBase/dbConnect.php";
$count=0;
//Code for selecting total no of bottles

$sql = sprintf("SELECT * FROM wineries
                    WHERE userid='$uname'");
$result = $mysqli->query($sql);

$sql2 = sprintf("SELECT * FROM wine_regions
                    WHERE userid='$uname'");
$result2 = $mysqli->query($sql2);

$sql3 = sprintf("SELECT * FROM grape_varieties
                    WHERE userid='$uname'");
$result3 = $mysqli->query($sql3);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Wines | Blends</title>
</head>
<body>
    <div class="dash-container">
        <div class="dash-nav-container">
            <img class="dash-nav-design" src="../Resources/Dashboard Nav.svg" alt="">
            <a class="nav-entries-logo" href="dashboard.php"><img class="nav-logo" src="../Resources/Logo.svg" alt="logo"></a>
            <a class="logout-dash-btn" href="../PHP/Login/logout.php">Log Out</a>
        </div>
        <div class="dash-content-div">
            <div class="dash-main-nav-div">
                <div class="dash-nav-main-entry">
                    <div class="dash-nav-main-logo">
                        <img src="../Resources/Dash1.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text dash-nav-main-text-dummy">
                        <a href="dashboard.php"><h3>Dashboard</h3></a>
                    </div>
                </div>

                <div class="dash-nav-main-entry dash-nav-main-entry-dummy">
                    <div class="dash-nav-main-logo">
                        <img class="dashboard-current-color" src="../Resources/Dash2.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text">
                        <a href="dash-wines.php"><h3>Wines</h3></a>
                    </div>
                </div>

                <div class="dash-nav-main-entry dash-nav-main-entry-dummy">
                    <div class="dash-nav-main-logo">
                        <img src="../Resources/Dash3.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text dash-nav-main-text-dummy">
                        <a href="dash-wineries.php"><h3>Wineries</h3></a>
                    </div>
                </div>

                <div class="dash-nav-main-entry dash-nav-main-entry-dummy">
                    <div class="dash-nav-main-logo">
                        <img src="../Resources/Dash4.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text dash-nav-main-text-dummy">
                        <a href=""><h3>Collection</h3></a>
                    </div>
                </div>

                <div class="dash-nav-main-entry dash-nav-main-entry-dummy">
                    <div class="dash-nav-main-logo">
                        <img src="../Resources/Dash5.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text dash-nav-main-text-dummy">
                        <a href=""><h3>Review</h3></a>
                    </div>
                </div>

                <div class="dash-nav-main-entry dash-nav-main-entry-dummy">
                    <div class="dash-nav-main-logo">
                        <img src="../Resources/Dash6.svg" alt="">
                    </div>
                    <div class="dash-nav-main-text dash-nav-main-text-dummy">
                        <a href=""><h3>Inventory</h3></a>
                    </div>
                </div>

            </div>
            <hr class="dash-hr">
            <div class="dash-contents-div">
                <div class="dash-wines-content-container dash-add-wines-container">
                    
                    <form class="dash-add-wine-entry-container" action="../PHP/Login/add-region.php" method="post">
                        <div class="dash-add-wines-content-div1">
                            <div class="add-wines-sec">
                                <label for="name">Region name</label>
                                <input name="region_name" type="text" required>
                            </div>

                            <div class="add-wines-sec">
                                <label for="year">Country</label>
                                <input name="country" type="text" required>
                            </div>

                        </div>
                        <div class="dash-add-wines-content-div2">

                            <div class="add-wines-sec">
                                <label for="year">Climate</label>
                                <input name="climate" type="text" required>
                            </div>

                            <div class="add-wines-sec">
                                <label for="year">Soil</label>
                                <input name="soil" type="text">
                            </div>
                        </div>
                        <input class="add-wine-sub-btn" type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>