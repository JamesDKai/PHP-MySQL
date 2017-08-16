<?php
    include('connection.php');

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <title>MySQL Select</title>
   </head>
   <body>
     <div class="container">
       <h1>MySQL Select</h1>
       <?php
           if (mysqli_num_rows($result) > 0) {
               // data is present
               // output the data

               echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>E-Mail</th></tr>";
               while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr><td>" . $row["id"] . "</td><td> " . $row["username"] . "</td><td> " . $row["email"] . "</td></tr>";
               }

               echo "</table>";
           } else {
               echo "No results found.";
           }

           mysqli_close($connection);
        ?>


     </div>
   <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
 </html>
