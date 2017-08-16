<?php
  define("TITLE", "PHP Arrays");
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

        // PLAIN VARIABLES
        $username = "johndoe";
        $fullName = "John Doe";
        $age = 32;
        $gender = "male";
        $country = "Mexico";


        // SIMPLE ARRAY
        $user = array(
                  "johndoe", // 0
                  "John Doe", // 1
                  32, // 2
                  "male", // 3
                  "Mexico" // 4
                );

        // ECHO THE VALUES OF THE ARRAY
        echo $user[0] ."<br>";
        echo $user[1] ."<br>";
        echo $user[2] ."<br>";
        echo $user[3] ."<br>";
        echo $user[4] ."<br>";

        // ASSOCIATIVE ARRAYS
        $people = array(
                    "username" => "johndoe",
                    "fullName" => "John Doe",
                    "age"      => 32,
                    "gender"   => "male",
                    "country"  => "Mexico"
                  );

        // ECHO THE VALUES OF THE ASSOCIATIVE ARRAY
        echo $people["username"] ."<br>";
        echo $people["fullName"] ."<br>";
        echo $people["age"] ."<br>";
        echo $people["gender"] ."<br>";
        echo $people["country"] ."<br>";

        // MULTI-DIMENTIONAL ARRAY
        $employees = array(
                        array( // index of 0
                          "username" => "johndoe",
                          "fullName" => "John Doe",
                          "age"      => 32,
                          "gender"   => "male",
                          "country"  => "Mexico"
                          ),
                        array( // index of 1
                          "username" => "janedoe",
                          "fullName" => "Jane Doe",
                          "age"      => 27,
                          "gender"   => "female",
                          "country"  => "Canada"
                          )
                    );

        // ECHO THE VALUES OF MULTI-DIMENTIONAL ARRAYS
        echo "<hr><br>";
        echo $employees[0]["fullName"] ."<br>";
        echo $employees[1]["username"] ."<br>";

       ?>

    </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
