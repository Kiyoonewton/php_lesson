<?php
include "includes/visibilityClass.inc.php"
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
    $person01 = new Person("isaac", "red", "23");
    echo $person01->getName();
    ?>
</body>

</html>