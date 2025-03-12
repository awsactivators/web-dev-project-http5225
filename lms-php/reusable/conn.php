<?php
  $connect = mysqli_connect('localhost', 'root', '', 'lms_schools');
  
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }