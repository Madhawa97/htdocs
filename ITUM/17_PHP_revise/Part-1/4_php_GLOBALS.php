<html>
<body>
<?php
// $GLOBALS used to access global vars
// from anywhere in the script.
$x = 75;
$y = 25;

function addition(){
    $GLOBALS["z"] = $GLOBALS["x"]+$GLOBALS["y"];
}

addition();
echo $z;
?>
</body>
</html>