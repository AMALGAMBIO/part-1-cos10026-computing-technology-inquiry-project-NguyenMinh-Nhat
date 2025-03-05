<html>
    <head>
        
    </head>
    <body>
    <?php include 'header.php'; ?>
        <form method = "post" action="process.php">
            <label for="username">Username:</label>
            <input type = "text" name = "username" required><br>

            <label for="password">Password:</label>
            <input type = "text" name = "password" required><br>

            <input type = "hidden" name = "token" value = "abc">
            <input type = "submit" value="Login">
        </form>
    <?php include 'footer.php'; ?>
    </body>
</html>