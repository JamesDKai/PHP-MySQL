<?php
    /*
        STEPS TO TAKE...

        1.  Build Login HTML form
        2.  Check if form has been submitted
        3.  Validate form data
        4.  Add form data to variables
        5.  Connect to database
        6.  Query the database for username submitted in the form
        6.1     If no entries: show error message
        7.  Store basic user data from database in variables
        8.  Verify stored hashed password with the one submitted in the form
        8.1     If invalid: show error message
        9.  Start a session & create session variables
        10. Redirect to a "profile page"
        10.1    Provide link to "logout" page
        10.2    Add cookie clear to logout page
        10.3    Provide link to log back include
        11. Close the MySQL connection

    */

    if(isset($_POST['login'])) {
        // build a function to validate data
        function validateFormData($formData) {
            $formData = trim(stripcslashes(htmlspecialchars($formData)));
            return $formData;
            }

        // create variables
        // wrap the data with function
        $formUser =  validateFormData($_POST['username']);
        $formPass =  validateFormData($_POST['password']);

        // connect to database
        include('connection.php');

        // create SQL query
        $query = "SELECT username, email, password FROM users WHERE username='$formUser'";

        // store the result
        $result = mysqli_query($connection, $query);

        // verify if result is returned
        if(mysqli_num_rows($result) > 0) {
            // store basic user data in variables
            while($row = mysqli_fetch_assoc($result)) {
                $user           = $row['username'];
                $email          = $row['email'];
                $hashedPass     = $row['password'];
            }

            // verify hashed password with the typed password
            if(password_verify($formPass, $hashedPass)) {
                // correct login details
                // start Session
                session_start();

                // store data in SESSION variables
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;

                // Redirect user to profile page
                header("Location: profile.php");
            } else {
                // error
                $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
            }
        } else { // there are no results in database
            $loginError = "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times</a></div>";
        }

        // close the MySQL connection
        mysqli_close($connection);
    }
 ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <title>Login</title>
    </head>
    <body>
      <div class="container">
        <h1>Login</h1>
        <p class="lead">Use this form to log  in to your accounts</p>

        <?php echo $loginError; ?>

        <form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
            <div class="form-group">
                <label for="login-username" class="sr-only">Username</label>
                <input type="text" class="form-control" id="login-username" placeholder="username" name="username">

                <label for="login-password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="login-password" placeholder="password" name="password">

                <button type="submit" class="btn btn-default" name="login">Login</button>
            </div>
        </form>


      </div>
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
  </html>
