<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Rentals</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Available Cars for Rent</h1>
    <div id="carList">
        <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>
                        <img src='".$row['image']."' alt='".$row['name']."' width='250'>
                        <strong>".$row['name']."</strong> - ".$row['price']." (".$row['location'].")
                      </div>";
            }
        } else {
            echo "No cars available!";
        }
        ?>
    </div>
</body>
</html>