<?php include "db_connect.php";?>
<?php
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