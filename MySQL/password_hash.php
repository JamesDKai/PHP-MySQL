<?php

include('connection.php');

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Password Hashing</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <h1>Password Hashing</h1>

            <?php

                // $password = password_hash("mypassword", PASSWORD_DEFAULT);
                // echo $password;

                $password = "mypassword";
                $hashedPassword = '$2y$10$EFGmoQaNyqvstHL9n5GpKOxhQ5w6xdWDbr9lABxpM.hzT3v9c5wEi';



                if(isset($_POST['login'])) {
                    if(password_verify($_POST['password'], $hashedPassword)) {
                        echo "Password Is Correct";
                    } else {
                        echo "Incorrect Password";
                    }
                }
             ?>

             <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

                 <label>* Password</label>
                 <input type="password" placeholder="Password" name="password"><br><br>

                 <input type="submit" name="login" value="Log in" class="btn btn-default">
             </form>

             <br>
             <em>Correct password is "<?php echo $password; ?>"</em>

        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
