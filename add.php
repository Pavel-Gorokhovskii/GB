<?php
include('config.php');
include('connect.php');

$result = $mysqli->query(
    "INSERT INTO `table` VALUE (NULL,'$_POST[text]', '$_POST[name]')"
);

$mysqli->close();

header('location: index.php');
