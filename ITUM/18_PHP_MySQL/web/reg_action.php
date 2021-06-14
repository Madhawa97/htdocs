<?php
require("db.php");

?>

<?php
$sql = "INSERT INTO register(firstname, lastname, email, password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created.";
} else {
    echo "Error creating record";
}
?>