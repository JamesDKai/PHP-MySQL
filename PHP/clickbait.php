<?php
  define("TITLE", "Honest Clickbait Headlines");
  include("functions.php");

  if( isset($_POST["fix_submit"])){
    // call function
    checkForClickBait();
  };
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
      <p class="lead">Hate clickbait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>

      <div class="row">
        <form class="col-sm-8 col-sm-offset-2" action="" method="post">
          <textarea placeholder="Paste Clickbait Headline Here" class="form-control input-lg" name="clickbait_headline" rows="8" cols="80"></textarea>
          <br>
          <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
        </form>
      </div>

      <?php
        if (isset($_POST["fix_submit"])){
          // get first value in array returned by checkForClickBait() function
          // store it in a variable
          $clickBait = checkForClickBait()[0];

          // get second value in array returned by checkForClickBait() function
          // store it in a variable
          $honestHeadline = checkForClickBait()[1];

          displayHonestHeadline($clickBait, $honestHeadline);
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
