<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login Page</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML5">
    <meta name="author" content="">
</head>

<body>

    <?php include 'header.inc'; ?>

    <form action="process.php" method="post">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>

    <?php include 'footer.inc'; ?>
    
</body>



</html>