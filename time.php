<?php
session_start();

//to reset the saved countdown
if (!empty($_REQUEST['resetCountdown']))
{
unset($_SESSION['startTime']);
}

if (empty($_SESSION['startTime']))
{
$_SESSION['startTime'] = time();
}

//In seconds
$startTime = time() - $_SESSION['startTime'];
echo $startTime;
