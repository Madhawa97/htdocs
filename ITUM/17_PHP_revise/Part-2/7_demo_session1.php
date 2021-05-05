<?php

/* Session variables are storing user information to be
used across multiple pages (e.g. username, favorite 
color, etc). By default, session variables last 
until the user closes the browser.
Session variables hold information about one single
user, and are available to all pages in one 
 application. */

session_start();

// session_start(); must be the first thing on 
// your document
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    // set session variables
    $_SESSION["favcolor"] = "green" ;
    $_SESSION["favanimal"] = "cat" ;
    echo "session variables are set";


    // now access these from another page
    ?>
</body>
</html>