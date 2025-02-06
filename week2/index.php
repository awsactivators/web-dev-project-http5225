<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 2</title>
</head>
<body>

  <!-- Using PHP to write html elements -->
  <?php
      echo '<h1>PHP and Creating Output</h1>';
      echo '<p>The PHP echo command can be used to create output.</p>';
  ?>

  <!-- <h1>PHP and Creating Output</h1> -->
    
  <!-- <p>The PHP echo command can be used to create output.</p> -->

  <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
  
  <ul>
      <li>Use HTML special characters</li>
      <li>Alternate between single and double quotes</li>
      <li>Use a backslash to escape quotes</li>
  </ul>
  
  <h2>More HTML to Convert</h2>

  <p>PHP says "Hello World!"</p>

  <p>Can you display a sentence with ' and "?</p>


  <!-- <img src="php-logo.png"> -->

  <br>
  
  <!-- Using PHP to sepcify the image tag -->
  <?php
    echo '<img src="./php-logo.png" alt="">';
  ?>
  
  <br>
  
  <img src="<?php echo './php-logo.png' ?>" alt="<?php echo 'Alt Tag'; ?>">

  <br><br><br>

  <!-- Using PHP to declare a variable -->
  <?php
    $name = "Genevieve";
    $lastName = 'Awa';

    // echo "Hello, " . $name;

    //  Object oriented way of defining an array
    // $person = array('Gary', 'Awa', 'awavieve@gmail.com');
    // $person[0];

    //  name way of defining an array
    $person['first'] = 'Genevieve';
    $person['last'] = 'Awa';
    $person['email'] = 'awavieve@gmail.com';
    $person['web'] = 'https://awsactivators.github.io/portfolio/';

    echo 'Hello, ' . $person['first'];
    
  ?>

  <br><br>

  <!-- In class activity -->
  <!-- Using PHP Mail to email and website link -->
  <a href="mailto:<?php echo $person['email'] ?>">Email me</a>

  <br><br>

  <a href="<?php echo $person['web'] ?>" target="_blank">View my website</a>


  
  <!-- Trying out javascript -->
  <!-- <script>
    document.write('Hello from javascript')
  </script>

  <br> -->

  <!-- Trying out javascript -->
    <!-- <?php
      echo 'Welcome to Vee\'s PHP class';
    ?> -->

</body>
</html>