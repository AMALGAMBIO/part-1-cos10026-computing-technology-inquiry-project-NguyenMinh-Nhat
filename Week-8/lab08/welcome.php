<?php
include 'header.php';
session_start();
$nhat_movie = ['Interstellar,Dragonball,Conan,Transformer,TFT'];
$phuc_movie = ['MomAndKids,Youaremygirlfriend,Tatics,Science,TFT'];

if (isset($_SESSION['user'])) {  // Check if user is logged in
    $username = $_SESSION['user'];

    if ($username == 'admin') {
        echo "Welcome, ". $_SESSION["user"] ."<br>";
        echo "Your favourite movies is: " ;
        foreach ($nhat_movie as $movie) {
            echo "- $movie <br>";
        }
    } else {
        echo "Welcome, ". $_SESSION["user"]."<br>";
        echo "Movies for phuc:<br>";
        foreach ($phuc_movie as $movie) {
            echo "- $movie <br>";
        }
    }
} else {
    echo "You are not logged in. <a href='login.html'>Login here</a>";
}
include "footer.php";
?>