<?php
        include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link href="welcome.css" rel="stylesheet">
</head>
<body>
    <nav>
        <h2 class="welcome-title">Welcome, <?php echo $username; ?></h2>
        <ul>
            <li class="nav-cars active">Cars</li>
            <li class="nav-update">Update Reservation</li>
            <li class="nav-cancel">Cancel Reservation</li>
        </ul>
        <h2 class="logout" onclick="return logout()">Logout</h2>
    </nav>
    <div class="main-container">
        <div class="cars-container">
            <div class="title-container">
                <h2 class="luxury-title active">Luxury</h2>
                <h2 class="sports-title">Sports</h2>
                <h2 class="classic-title">Classic</h2>
            </div>
            <div class="luxury-container active">
                <div class="car">
                    <img src="images/rollsroyce-blue.jpg">
                    <div class="car-title">Rolls Royce Phantom (Blue) <br><span>RM 9800/day</span></div>
                </div>
                <div class="car">
                    <img src="images/bentley-white.jpg">
                    <div class="car-title">Bentley Continental Flying Spur (White) <br><span>RM 4800/day</span></div>
                </div>
                <div class="car">
                    <img src="images/benz-silver.jpg">
                    <div class="car-title">Mercedes Benz CLS 350 (Silver) <br><span>RM 1350/day</span></div>
                </div>
                <div class="car">
                    <img src="images/jaguar-champagne.jpg">
                    <div class="car-title">Jaguar S Type (Champagne) <br><span>RM 1350/day</span></div>
                </div>
            </div>
            <div class="sports-container">
                <div class="car">
                    <img src="images/ferrari-red.jpg">
                    <div class="car-title">Ferrari F430 Scuderia (Red) <br><span>RM 6000/day</span></div>
                </div>
                <div class="car">
                    <img src="images/lambo-black.jpg">
                    <div class="car-title">Lamborghini Murcielago LP640 (Matte Black) <br><span>RM 7000/day</span></div>
                </div>
                <div class="car">
                    <img src="images/porsche-white.jpg">
                    <div class="car-title">Porsche Boxster (White) <br><span>RM 2800/day</span></div>
                </div>
                <div class="car">
                    <img src="images/lexus-black.jpg">
                    <div class="car-title">Lexus SC430 (Black) <br><span>RM 1600/day</span></div>
                </div>
            </div>
            <div class="classic-container">
                <div class="car">
                    <img src="images/jaguar-white.jpg">
                    <div class="car-title">Jaguar MK 2 (White) <br><span>RM 2200/day</span></div>
                </div>
                <div class="car">
                    <img src="images/rollsroyce-silver.jpg">
                    <div class="car-title">Rolls Royce Silver Spirit Limousine (Georgian Silver) <br><span>RM 3200/day</span></div>
                </div>
                <div class="car">
                    <img src="images/mgtd-red.jpg">
                    <div class="car-title">MG TD (Red) <br><span>RM 2500/day</span></div>
                </div>
            </div>

        </div>
        <div class="update-container">
            <h2 class="update-container-title">Update / Change Reservation</h2>
            <div class="update-box">
                <form name="update-form" method="POST">
                    <div class="input-box">
                        <input name="reservation" type="text" required>
                        <label>Reservation Number</label>
                    </div>
                    <div class="input-box-date">
                        <input name="startdate" type="date" required>
                        <label>Start Date</label>
                    </div>
                    <div class="input-box-date">
                        <input name="date" type="date" value=""required>
                        <label>End Date</label>
                    </div>
                    <div id="submit-button">
                        <input type="submit" value="Submit" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="cancel-container">
            <h2 class="cancel-container-title">Cancel Reservation</h2>
            <div class="update-box">
                <form name="cancel-form" method="POST">
                    <div class="input-box">
                        <input name="reservation" type="text" required>
                        <label>Reservation Number</label>
                    </div>
                    <div id="submit-button">
                        <input type="submit" value="Cancel Reservation" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="welcome.js"></script>
</body>
</html>