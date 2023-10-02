<?php

echo "working yes ites working<br/>";
echo "sir faheem";

  
include 'db_connection.php';
    $conn = OpenCon();
    echo "Connected Successfully";
    CloseCon($conn);
?>