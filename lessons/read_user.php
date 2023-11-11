<?php include "incl_fuc/db_connect.php";
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query failed' . mysqli_error($connection));
};
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
        <?php
        while ($row = mysqli_fetch_row($result)) {
        ?>
            <pre>
                <?php
                print_r($row);
                ?>
            </pre>
        <?php
        };
        ?>
    </div>
</body>

</html>