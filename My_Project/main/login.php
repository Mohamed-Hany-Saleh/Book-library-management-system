<?php
include_once 'main.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library | Login</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon" href="../media/navicon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Libr</title>
</head>

<body>
    <div class="login-div">
        <form method="POST" data-aos="fade-center">
            <h1>Welcome!</h1>
            <input type="text" name="username" placeholder="username" id="username" required>
            <input type="password" name="password" placeholder="password" id="password" required>
            <input type="submit" name="login" value="Login" id="button">
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>