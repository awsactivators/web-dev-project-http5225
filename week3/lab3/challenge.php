<!doctype html>
<html>
<head>
    <title>PHP If Statements</title> 
</head>
<body>

    <h1>Inclass Activity - Challenge 1</h1> 
    <h2>Welcome to the Quirky Zoo Management System</h2>

    <?php
    // variables
    $randomHour = ceil(rand(1,24)); // Generate a random hour (1 to 24)
    $breakfast = "Bananas, Apples, and Oats";
    $lunch = "Fish, Chicken, and Vegetables";
    $dinner = "Steak, Carrots, and Broccoli";
    $notFed = "The animals are not being fed.";


    // Display the random hour
    echo '<p>The random hour is '.$randomHour.'.</p>';

    // if the hour is between 5 AM and 9 AM (using 24 hours)
    if ($randomHour >= 5 && $randomHour <= 9) 
    {
        echo 'The animals need to have breakfast: <strong>'.$breakfast.'</strong>';
    }
    // if the hour is between 12 PM and 2 PM (using 24 hours)
    elseif ($randomHour >= 12 && $randomHour <= 14)
    {
        echo 'The animals need to have lunch: <strong>'.$lunch.'</strong>';
    }
    // if the hour is between 7 PM and 9 PM (using 24 hours)
    elseif ($randomHour >= 19 && $randomHour <= 21)
    {
        echo 'The animals need to have dinner: <strong>'.$dinner.'</strong>';
    }
    // Anything else not covered in the above control logic
    else 
    {
        echo ''.$notFed.'';
    }

    ?>


    <h1>Inclass Activity - Challenge 2</h1> 
    <h2> The Magic Number Game</h2>

    <?php
    // variables
    $randomNumber = ceil(rand(1,100)); // Generate a random number (1 to 100)
    $diviThree = "The magic number is Fizz";
    $diviFive = "The magic number is Buzz";
    $diviBoth = "The magic number is FizzBuzz";
    $neitherDivi = "The magic number is the number itself. $randomNumber";

    // Display the random number
    echo '<p>The randon number is '.$randomNumber.'</p>';

    // if random number is is divisible by 3 and 5
    if ($randomNumber % 3 == 0 && $randomNumber % 5 == 0)
    {
        echo ''.$diviBoth.'';
    }
     // if random number is divisible by 5
    elseif ($randomNumber % 5 == 0)
    {
        echo ''.$diviFive.'';
    }
     // if random number is divisible by 3
    elseif ($randomNumber % 3 == 0 )
    {
        echo ''.$diviThree.'';
    }
    // else if random number is not divisible by either number
    else
    {
        echo ''.$neitherDivi.'';
    }

    ?>


</body>
</html>
