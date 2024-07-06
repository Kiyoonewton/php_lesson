<?php
include "includes/autoloader.inc.php"
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
    $person = new Person("isaac", "blue", 21);
    echo $person->getName();

    echo Static_class::$drinkingAge;
    echo Static_class::setDrinkageAge(21);
    echo Static_class::$drinkingAge;

    ?>
</body>

</html>