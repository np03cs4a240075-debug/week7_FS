<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

$theme = $_COOKIE['theme'] ?? "light";
?>

<style>
body {
    background-color: <?= $theme == "dark" ? "#000" : "#fff" ?>;
    color: <?= $theme == "dark" ? "#fff" : "#000" ?>;
}
</style>

<h2>Welcome, <?= $_SESSION['name']; ?> 👋</h2>

<a href="preference.php">Change Theme</a><br><br>
<a href="logout.php">Logout</a>
