<?php

  //connect to mysql
  $con = mysqli_connect("localhost", "root", "root", "chat");


  if (mysqli_connect_errno()) {
    echo "Failed to connect: ".mysqli_connect_error();
  }
