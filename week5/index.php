<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
  <style>
    body {
      margin: 0;
    }
  </style>
</head>
<body>
  <h1>Database connection</h1>
  <?php
  // Connect to a database
    $connect = mysqli_connect(
      'localhost',
      'root',
      '',
      'colors'
    );

    if (!$connect) {
      die("Connection Failed:" . mysqli_connect_error());
    }

    $query = 'SELECT `Name`,`Hex` FROM colors';
    $colors = mysqli_query($connect, $query);
    
      foreach ($colors as $color) {
          echo
          '<div style="align-content: center; font-size: 18px; font-weight: 700; text-align: center; width: 100%; height: 100px; background-color: ' . $color["Hex"] . '"> '.$color["Name"].'</div>';
      }
  ?>
</body>
</html>