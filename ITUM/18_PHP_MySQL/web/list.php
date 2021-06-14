<?php
session_start();

require("db.php");

$user_email = $_SESSION["user_email"];
$user_password = $_SESSION["user_password"];

$sql = "SELECT stdid, firstname, email FROM register WHERE email='$user_email' AND password ='$user_password'";
$result = $conn->query($sql);

if ($result -> num_rows > 0) {
    // output data of each row
    while ($row = $result -> fetch_assoc()) {
        echo "<div>";
        echo "<h1>" . $row['stdid']. "</h1>" ;
        echo "<p>" . $row['firstname'] . "</p>";
        echo "<h4>" . $row['email'] . "<h4>";
        echo "</div>";
    }
} else {
    echo "Error";
}

$conn = close();

?>