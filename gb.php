<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel="stylesheet">

</head>

<body>
    <?php

    include('conect.php');
    include('function.php');


    $result = $mysqli->query('SELECT * FROM `table`');

    while ($row = $result->fetch_object()) {
        echo "<b>" . bbCode(smile($row->text)) . "</b> <i>$row->name</i><br>\n";
    }

    $mysqli->close();

    ?>
    <form action="add.php" method="post">
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="OK">
    </form>
</body>

</html>