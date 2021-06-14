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
$conn = new mysqli($server,$username,$password,$dbname);
// check connection
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
// echo "Connected Successfully";

// $user_email = $_POST['email'];
// $user_password = $_POST['password'];

$_SESSION['user_email'] = $_POST['email'];
$_SESSION['user_password'] = $_POST['password'];
$user_email = $_SESSION["user_email"];
$user_password = $_SESSION["user_password"];

// $sql = "SELECT * FROM register WHERE email='$user_email' AND password ='$user_password' ";

$sql = "SELECT * FROM register WHERE email = '$user_email' AND password = '$user_password' ";

$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    echo "Login Success";
} else {
    echo "Invalid Login";
}

?>