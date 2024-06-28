<?php
include_once 'main.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library | Insert</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/insert_style.css">
    <link rel="icon" type="image/x-icon" href="../media/navicon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="nav">
        <a href="./home.html">Home</a>
        <a class="active" href="./insert.php">Insert</a>
        <a href="./update.php">Update</a>
        <a href="./more.php">More</a>
        <a style="float:right" href="./login.php">Logout</a>
    </div>
    <div class="insert-div">
        <form action="insert.php" method="post" data-aos="fade-center">
            <div data-aos="fade-left"> <img id="insert-img" src="../media/insert.svg">
            </div>
            <input type="number" min="0" name="id" placeholder="ID" required>
            <input type="text" name="title" placeholder="Title" required>
            <select name="type" required>
                <option value="" disabled selected>Type</option>
                <option value="Action and Adventure"> Action and Adventure </option>
                <option value="Classics"> Classics </option>
                <option value="Comic Book or Graphic Novel"> Comic Book or Graphic Novel </option>
                <option value="Detective and Mystery"> Detective and Mystery </option>
                <option value="Fantasy"> Fantasy </option>
                <option value="Historical Fiction"> Historical Fiction </option>
                <option value="Horror"> Horror </option>
                <option value="Literary Fiction"> Literary Fiction </option>
                <option value="Romance"> Romance </option>
                <option value="Science Fiction"> Science Fiction (Sci-Fi) </option>
                <option value="Short Stories"> Short Stories </option>
                <option value="Suspense and Thrillers"> Suspense and Thrillers </option>
                <option value="Women's Fiction"> Women's Fiction </option>
                <option value="Biographies and Autobiographies"> Biographies and Autobiographies </option>
                <option value="Cookbooks"> Cookbooks </option>
                <option value="Essays"> Essays </option>
                <option value="History"> History </option>
                <option value="Memoir"> Memoir </option>
                <option value="Poetry"> Poetry </option>
                <option value="Self-Help"> Self-Help </option>
                <option value="True Crime"> True Crime </option>
            </select>
            <input type="number" min="0" name="page_count" placeholder="Page Count" required>
            <input type="text" name="author" placeholder="Author" required>
            <br>
            <input type="submit" name="insert" value="Insert" id="button">
            <input type="reset" nme="reset" value="Reset" id="button">
        </form>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>