<?php
include 'db_connection.php';
$conn = OpenCon();
echo "connected successfully";
CloseCon($conn);
?>