<?php include "db_connect.php"; ?>
<?php

function createUser()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $hashFormat = '$2y$10$';
    $salt = 'icreatesomecrazystrings22';
    $format_salt = $hashFormat . $salt;
    $password = crypt($password, $format_salt);
    $query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    };
}

function getUsersId()
{
    global $connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "failed to get the Ids" . mysqli_error($connection);
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }
}

function getUsers()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    } else {
        return $result;
    }
}

function deleteUser()
{
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users";
    $query .= " WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("delete failed" . mysqli_error($connection));
    }
}
