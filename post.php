<!DOCTYPE html>
<html>
<head>
    <title>POST Form Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
    <?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    } else {
        echo "No data received.";
    }
    ?>

