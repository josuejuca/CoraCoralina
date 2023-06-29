<?php
session_start();
session_destroy();

echo "<script>";
echo "window.location.href = '../index.php';";
echo "</script> ";
?>
