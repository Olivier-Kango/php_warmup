<?php

// STRING

 // $name = "Olivier";
  define('NAME', 'Olivier');
  $age = 32;

  $stringOne = 'my email is ';
  $stringTwo = 'olivierkango@gmail.com';

  $name = "mario";

  // echo 'Hey, my name is ' . $name;
  // echo "Hey, my name is $name"

  // echo 'The Ninja say "Haaaaa"';
  // echo "The Ninja say \"Haaaaa\"";
  // echo $stringTwo[12];

  // echo strlen($stringTwo);
  // echo strtoupper($name);
  // echo strtolower('KANGO');
  echo str_replace('m', 'w', $name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my first PHP file</title>
</head>
<body>
  <h1><?php echo $stringOne.$stringTwo ?></h1>
</body>
</html>