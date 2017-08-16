<?php
    include('connection.php');

    if(isset($_POST["add"])) {
        // build a function that validates data
        function validateFormData($formData) {
            $formData = trim(stripcslashes(htmlspecialchars($formData)));
            return $formData;
        }
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function

        // set all variables to empty by default to overide "root" value
        $username = $email = $password = "";

        if(!$_POST["username"]){
            $nameError = "Please enter a username <br>";
        } else {
            $username = validateFormData($_POST["username"]);
        }

        if(!$_POST["email"]){
            $emailError = "Please enter an email address <br>";
        } else {
            $email = validateFormData($_POST["email"]);
        }

        if(!$_POST["password"]){
            $passwordError = "Please enter a password <br>";
        } else {
            $password = validateFormData($_POST["password"]);
        }

        if($username && $email && $password) {
            $query = "  INSERT INTO users (id, username, password, email, signup_date, biography)
              VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";

              if(mysqli_query($connection, $query)) {
                  echo "<div class='alert alert-success'>New record stored in database.</div>";
              } else {
                  echo "Error: " . $query . "<br>" . mysqli_error($connection);
              }
        }
    }

    /*
    MYSQL INSERT QUERY

    INSERT INTO users (id, username, password, email, signup_date, biography)
    VALUES (NULL, 'jacksonsmith', 'abc123', 'jack@son.com', CURRENT_TIMESTAMP, 'Hello! I'm Jackson. This is my bio.');

    */
    
    mysqli_close($connection);
 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <title>MySQL Insert</title>
   </head>
   <body>
     <div class="container">
       <h1>MySQL Insert</h1>

        <p class="text-danger">* Required Fields</p>
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
            <small class="text-danger">* <?php echo $nameError; ?></small>
            <input type="text" placeholder="Username" name="username"><br><br>

            <small class="text-danger">* <?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="email"><br><br>

            <small class="text-danger">* <?php echo $passwordError; ?></small>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="submit" name="add" value="Add Entry">
        </form>


     </div>
   <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
 </html>
