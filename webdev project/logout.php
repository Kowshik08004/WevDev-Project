<?php
session_start();
session_destroy();
echo "About to logout...";
header("location: index100.html");
exit;
?>