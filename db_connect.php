<?php
// MySQL server configuration
$server = "127.0.0.1";
$username = "hitesh";
$password = "hiteshsajnani";
$database = "sahyog_mart";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data from product_id_1 table
$sql = "SELECT * FROM product_id_1";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Product Name: " . $row["product_name"] . "<br>";
        echo "Price: " . $row["price"] . "<br>";
        echo "Size: " . $row["size"] . "<br>";
        echo "Product Image: " . $row["product_img"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>
