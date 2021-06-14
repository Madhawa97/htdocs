<?php
    session_start();
?>

<?php
$server = "localhost";
$username = "root";
// MAMP default password is root
$password = "root";
$dbname = "studentdb";

//create connection
$conn = mysqli_connect($server,$username,$password,$dbname);
// check connection
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
// echo "Connected Successfully";

?>