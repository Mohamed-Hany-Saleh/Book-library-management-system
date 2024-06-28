<?php
include_once 'main.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library | More</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/more_style.css">
    <link rel="icon" type="image/x-icon" href="../media/navicon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="nav">
        <a href="./home.html">Home</a>
        <a href="./insert.php">Insert</a>
        <a href="./update.php">Update</a>
        <a class="active" href="./more.php">More</a>
        <a style="float:right" href="./login.php">Logout</a>
    </div>
    <div class="more-div">
        <form method="post">
            <div class="table" data-aos="fade-up">
                <?php
                if (isset($_POST['search'])) {
                    $id = $_POST['id'];
                    $sql = "SELECT * FROM book WHERE ID=$id";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Title</th>";
                            echo "<th>Type</th>";
                            echo "<th>Page Count</th>";
                            echo "<th>Author</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['title'] . "</td>";
                                echo "<td>" . $row['type'] . "</td>";
                                echo "<td>" . $row['page_count'] . "</td>";
                                echo "<td>" . $row['author'] . "</td>";
                                echo "</tr>";
                            }
                        }
                        echo "</table>";
                        mysqli_free_result($result);
                    } else {
                        echo '';
                    }
                    mysqli_close($conn);
                }
                ?>
            </div>
            <div data-aos="fade-center">
                <input type="number" min="0" name="id" placeholder="ID" id="number" required>
                <input type="submit" name="search" value="Search" id="button">
                <input type="submit" name="delete" value="Delete" id="button">
            </div>

        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>