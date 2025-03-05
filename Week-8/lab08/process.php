<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin'&& $password == 'password123') {
        $_SESSION['user'] = $username;
        header('Location:welcome.php');
    }    else {
        echo "Invalid Login. <a = href='login.html'>Try Again </a> ";
    }

    if ($username == 'phuc'&& $password == 'chophuc') {
        $_SESSION['user'] = $username;
        header('Location:welcome.php');
    }
?>