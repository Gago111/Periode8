<?php
// session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page

$yourURL = get_the_permalink(171);
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  echo ("<script>location.href='$yourURL'</script>");
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            $results = mysqli_query($link,$sql);
                            $userdata = mysqli_fetch_assoc($results);
                            // Store data in session variables
                            $_SESSION['id'] = $userdata["id"];
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            $yourURL = get_the_permalink(171);
                            echo ("<script>location.href='$yourURL'</script>");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 15px sans-serif; }
    </style>
</head>
<body>
  <style media="screen">
    h1.entry-title {
      display:none;
    }

    #text-2 p ,li,h2 {
      color:gray;
    }
</style>

    <div class="container">
      <div class="row">
        <div  class="col-md-8 col-lg-6 col-xl-5">
          <h2 class="text-white">Login</h2>
          <p class="text-white">Vul je login gegevens in</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                  <label class="text-white">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                  <span style="color:red" class="help-block"><?php echo $username_err; ?></span>
              </div>
              <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                  <label class="text-white">Password</label>
                  <input type="password" name="password" class="form-control">
                  <span style="color:red" class="help-block"><?php echo $password_err; ?></span>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Login">
              </div>
              <?php

              $current_user = wp_get_current_user();
                if (user_can( $current_user, 'administrator' )) {
                  ?>
                  <a href="<?php echo get_the_permalink(160); ?>">Registreer een gebruiker </a>

                <?php } ?>

            </form>
          </div>
        </div>
      </div>

    </body>
  </html>
