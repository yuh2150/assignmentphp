<?php
error_reporting(0);
session_start();

// delete session[nam] -> name null , age is 120
unset($_SESSION['name']);
// session_destroy();
// session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    echo "Ten ban la:  " . $_SESSION['name'] . " <br>So tuoi cua ban: " . $_SESSION['age'];
    ?>
</body>

</html>