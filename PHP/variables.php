<?php
  // CONSTANTS
  define("TITLE", "PHP Variables & Constants");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE ?></title>
  </head>
  <body>

    <?php
      // BOOLEAN: A boolean variable specifies a value of true or false
      $loggedIn = true;

      // INTEGER: An integer variable is any whole nummber
      $myAge = 25;

      // FLOATING POINT: Usually a fractional number, with a decimal
      $totalPrice = 146.28;

      // STRING: Simple text that must be enclosed within double quotations " " or single quotations ' '
      $fullName = "John Doe";

      // DISPLAY VARIABLES ON SCREEN
      echo "Hello, my name is $fullName and I am $myAge years old!"


     ?>

  </body>
</html>
