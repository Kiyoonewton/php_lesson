<?php include "incl_fuc/db_connect.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    };
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/boostrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="create_user.php" method="post" class="formContainer">
            <input type="text" name="username" placeholder="Enter Username" class="formcontainerInput" />
            <input type="password" name="password" placeholder="Enter Password" class="formcontainerInput" />
            <input type="submit" name="submit" class="formcontainerButton" value="Login" />
        </form>
    </div>
</body>

</html>