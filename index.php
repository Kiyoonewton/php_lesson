<?php
include "includes/static.inc.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documented</title>
</head>

<body>
    <?php
    echo Person::$drinkingAge;
    echo Person::setDrinkageAge(21);
    echo Person::$drinkingAge;

    ?>
</body>

</html>