<html>
<head>
    <title>PHP functions</title>
</head>
<body>
    <h2>Product of 2 numbers using PHP</h2>
    <?php
    function findProduct($num1, $num2){
        $product = $num1 * $num2;
        echo "The product of two numbers is : $product";
    } 
    findProduct(10,20);
    ?>
</body>
</html>