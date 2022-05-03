<?php
    $con=mysqli_connect("localhost", "root", "", "vehicle-parking-db");
    if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    }
  ?>