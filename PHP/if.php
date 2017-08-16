<?php
  define("TITLE", "If, Else &amp; Elseif Statements");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title><?php echo TITLE ?></title>
  </head>
  <body>
    <div class="container">
      <h1><?php echo TITLE ?></h1>

      <?php
          // IF expression is TRUE, do something
          // IF expression is FALSE, don't do anything
          $foo = 99;
          $bar = 79;
          if ($foo > $bar) {
              // code to execute if true
              echo "$foo is greater than $bar. <br>";
          };

          // ELSE

          $currentlyListeningTo = "Nickleback";
          if ($currentlyListeningTo == "Ne-Yo") {
              // if TRUE
              echo "You are listening to $currentlyListeningTo. <br>";
          } else {
              // if FALSE
              echo "Taking a wild guess here, you're listening to $currentlyListeningTo. <br>";
          };

          // ELSEIF
          $favProgrammingLan = "PHP";
          if ($favProgrammingLan == "Ruby") {
              // code to execute if expression is TRUE
              echo "Your favorite programming language is $favProgrammingLan. <br>";
          } elseif ($favProgrammingLan == "PHP") {
              // code to execute if original expression is FALSE
              // AND the ELSEIF expression is TRUE
              echo "Good one! You like $favProgrammingLan. <br>";
          } else {
              // code to execute if both previous expressions are FALSE
              echo "Guess you don't like PHP or Ruby. Oh well... <br>";
          };
       ?>

    </div>
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
