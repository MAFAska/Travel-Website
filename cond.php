<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css"/>

    <style>
        .table-container {
    overflow-x: auto;
    max-width: 100%;
}
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
            font-size:16px;

        }

        th {
            background-color:rgb(81, 160, 203);
            color: #fff;
            
        }
    </style>
</head>
<body>

<!-- Header -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="contact.php">contact</a>
        <a href="cond.php">customer details</a>
    </nav>
    <div id="menu-btn" class="fa fa-bars"></div>
</section>

<!-- Heading Section -->
<div class="heading" style="background: url(image/coustomer-img.png) no-repeat">
    <h1>your details</h1>
</div>

<!-- Booking Section -->
<section class="booking">
    <h1 class="heading-title">customer details</h1>
 <div class="table-container">
    <!-- PHP Table Output -->
    <table>
        <thead>
            <tr>
                <th style="width: 200px;">Name</th>
                <th style="width: 400px;">Email</th>
                <th style="width: 200px;">Phone</th>
                <th style="width: 200px;">Address</th>
                <th style="width: 200px;">Location</th>
                <th style="width: 80px;">Guests</th>
                <th style="width: 200px;">Arrivals</th>
                <th style="width: 200px;">Leaving</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sur = "localhost";
        $un = "root";
        $pass = "";
        $db = "book_db";

        $con = mysqli_connect($sur, $un, $pass, $db);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM book_form";
        $res = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>{$row[1]}</td>";
            echo "<td>{$row[2]}</td>";
            echo "<td>{$row[3]}</td>";
            echo "<td>{$row[4]}</td>";
            echo "<td>{$row[5]}</td>";
            echo "<td>{$row[6]}</td>";
            echo "<td>{$row[7]}</td>";
            echo "</tr>";
        }

        mysqli_close($con);
        ?>
        </tbody>
    </table>
     </div>
</section>

<!-- Footer Section -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fa fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fa fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fa fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fa fa-angle-right"></i>book</a>
            <a href="contact.php"><i class="fa fa-angle-right"></i>contact</a>
            <a href="cond.php"><i class="fa fa-angle-right"></i>customer details</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fa fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fa fa-angle-right"></i>about us</a>
            <a href="#"><i class="fa fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fa fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fa fa-phone"></i>+94743412783</a>
            <a href="#"><i class="fa fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fa fa-envelope"></i>askafathima84@gmail.com</a>
            <a href="#"><i class="fa fa-map"></i>kurunegala, Srilanka-60160</a>
        </div>  

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fa fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fa fa-twitter"></i>twitter</a>
            <a href="#"><i class="fa fa-instagram"></i>instagram</a>
            <a href="#"><i class="fa fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    

    <div class="credit">created by <span> Mis. Fathima Aska </span> | all rights reserved!</div>
</section>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>
</body>
</html>
