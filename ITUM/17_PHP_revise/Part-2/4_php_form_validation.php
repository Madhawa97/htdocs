<html>
    <head>
        <title>PHP form validation</title>
    </head>
    <body>
        <?php
        // define variables , initialize
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //   LEARN HOW TO INTEGRATE BELOW CODE
        /* 
        $name = test_input($_POST["name"]);

        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white spaces allowed";
        }

        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "invalid email format";
        }

        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "invalid URL";
        } */

        ?>

        <h2>PHP form validation</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Website: <input type="text" name="website">
            <br><br>
            Comment: <textarea name="comment" cols="40" rows="5"></textarea>
            <br><br>
            Gender: 
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <br><br>
            <input type="submit" name="submit" value="submit" >
        </form>

        <?php
        echo "<h2>Your input:</h2>";
        echo "$name <br>";
        echo "$email <br>";
        echo "$website <br>";
        echo "$comment <br>";
        echo "$gender <br>";
        ?>

    </body>
</html>