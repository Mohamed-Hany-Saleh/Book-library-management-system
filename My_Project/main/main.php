<?php
// connection
$conn = new mysqli("localhost","root","","my_project");
if($conn->connect_error){
    echo 'Connection Failed:'.$conn->connect_error;
} else {
    echo '';
}

// login 
if (isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: http://localhost/My_Project/main/home.html");
    } else {
        echo'';
    }
}

// insert
if (isset($_POST['insert'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $page_count = $_POST['page_count'];
    $author = $_POST['author'];

    $sql = "INSERT INTO book (id, title, type, page_count, author)
     VALUES ('$id', '$title', '$type', '$page_count', '$author')";
    if (mysqli_query($conn, $sql)) {
        echo '';
    } else {
        echo '';
    }
    mysqli_close($conn);
}

// update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $page_count = $_POST['page_count'];
    $author = $_POST['author'];

    $sql = "UPDATE book SET title='$title', type='$type', page_count='$page_count', author='$author' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo '';
    } else {
        echo '';
    }
    mysqli_close($conn);
}

// delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM book WHERE ID=$id";
    if (mysqli_query($conn, $sql)) {
        echo '';
    } else {
        echo '';
    }
    mysqli_close($conn);
}

?>