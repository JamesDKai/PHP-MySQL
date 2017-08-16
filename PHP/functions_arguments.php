<?php
  define("TITLE", "Functions &amp; Arguments");
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
          function myFirstFunction() {
            $a = 0;

            do {
                echo "$a &nbsp;";
                $a++;
            } while ($a <= 100);
          }

          // call the function
          myFirstFunction();

          function mySecondFunction($a) {
              do {
                  echo "$a &nbsp;";
                  $a++;
              } while ($a <= 10);
          }

          // call the function
          // pass in an argument
          mySecondFunction(5);


          function addTogether($num1, $num2) {
              $newNum = $num1 + $num2;
              echo "$num1 + $num2 = $newNum";
          }

          addTogether(39, 128);
       ?>

    </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
