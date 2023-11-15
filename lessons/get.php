<?php
print_r($_GET);
$id = 10;
$button = "click this button"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>
</body>

</html>