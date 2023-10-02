<?php
  function OpenCon()
  {
      $dbhost = "nlb-salesflopaynew-rds-9eac8591cf3c786e.elb.us-east-1.amazonaws.com";
      $dbuser = "admin";
      $dbpass = "salesflo";
      $dbname = "users";
      $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
      return $conn;
  }
  function CloseCon($conn)
  {
      $conn -> close();
  }
?>