<?php
  define("TITLE", "GET &amp; POST");

  if(isset($_POST["post_submit"])) {
      // build a function that validates data
      function validateFormData($formData) {
          $formData = trim(stripcslashes(htmlspecialchars($formData)));
          return $formData;
      }
      // check to see if inputs are empty
      // create variables with form data
      // wrap the data with our function
      if(!$_POST["post_name"]){
          $nameError = "Please enter your name <br>";
      } else {
          $name = validateFormData($_POST["post_name"]);
      }

      if(!$_POST["post_email"]){
          $emailError = "Please enter your email address <br>";
      } else {
          $email = validateFormData($_POST["post_email"]);
      }
  }
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

      <!-- GET = DATA IS SUBMITTED VIA URL PARAMETERS -->
      <h4>Submitted via $_GET</h4>
      <form action="form_get.php" method="get">
          <input type="text" placeholder="Name" name="name">
          <input type="text" placeholder="Email" name="email">
          <input type="submit" name="form_submit">
      </form>

      <hr>

      <!-- POST = DATA IS SUBMITTED VIA HTTP REQUEST -->
      <h4>Submitted via $_POST</h4>
      <form action="form_post.php" method="post">
          <input type="text" placeholder="Name" name="post_name">
          <input type="text" placeholder="Email" name="post_email">
          <input type="submit" name="post_submit">
      </form>

      <!-- EXAMPLE OF HOW THE DATA IS SAVED AS AN ASSOCIATIVE ARRAY -->
      <?php
          array(
              "name" => "Doe",
              "email" => "doe@example.com"
          );
       ?>

       <hr>

       <h4>Submitted to current page</h4>
       <p class="text-danger">* Required Fields</p>
       <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
           <small class="text-danger">* <?php echo $nameError; ?></small>
           <input type="text" placeholder="Name" name="post_name"><br><br>

           <small class="text-danger">* <?php echo $emailError; ?></small>
           <input type="text" placeholder="Email" name="post_email"><br><br>
           <input type="submit" name="post_submit">
       </form>

       <?php
          if(isset($_POST["post_submit"])) {
              echo "<h4>Your Info</h4>";
              echo "$name <br> $email <br>";
          }
        ?>

    </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
