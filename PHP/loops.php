<?php
  define("TITLE", "Loops");
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
        // WHILE LOOP
        $startingNum = 50;
        while ($startingNum <= 100) {
            // execute code
            echo "$startingNum &nbsp;";

            // increment by 1
            $startingNum++;
        };

        // FOR LOOP
        for ($a = 30; $a <= 40; $a++) {
            // execute code
            echo "Number $a <br>";
        };

        // FOREACH LOOP
        $friends = array("Bob", "John", "Jane", "Sarah");
        foreach ($friends as $friend){
            // output each individual value in the array
            echo "$friend is my friend! <br>";
        };

        // DO WHILE LOOP
        $foo = 10;
        do {
            // execute code
            echo "Numero $foo <br>";

            // increment by 1
            $foo++;
        } while ($foo <= 50);
       ?>

    </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
