<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connectivity</title>
    <style>
        body{
            background-color: "gray";
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <form action="connect.php" method="post">
        <label for="user">Name:</label><br>
        <input type="text" name="name" id="name" required/><br><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" required/><br><br>
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" id="phone" required/><br><br>
        <label for="bgroup">Blood Group:</label><br>
        <input type="text" name="bgroup" id="bgroup" required/><br><br>

        <input type="submit" name="submit" id="submit"/>


    </form>
</body>
</html>