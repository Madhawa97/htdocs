<?php
session_start();

?>

<!DOCTYPE html>
<html>
<body>
    <?php
    // to change session variables, just overwrite it.
    $_SESSION["favcolor"] = "yellow" ; 
    print_r($_SESSION);
    ?>
</body>
</html>