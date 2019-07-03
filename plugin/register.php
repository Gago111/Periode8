<?php
$current_user = wp_get_current_user();
  if (user_can( $current_user, 'administrator' )) {
    // Include config file
    require_once "config.php";

    // Define variables and initialize with empty values
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate username
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter a username.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                // Set parameters
                $param_username = trim($_POST["username"]);

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = trim($_POST["username"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }

        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }

        // Check input errors before inserting in database
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

            // Prepare an insert statement
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                // Set parameters
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){

                    $succes = "Account created";
                    // Redirect to login page
                    // $yourURL4 = get_the_permalink(162);
                    // echo ("<script>location.href='$yourURL4'</script>");
                } else {
                    echo "Something went wrong. Please try again later.";
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
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
          <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="px-4 pb-3">
                  <h2 class="text-white">Sign Up</h2>
                  <p class="text-white">Vul dit formulier in om een account te maken</p>
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <p style="font-size:18px;" class="text-success">
                      <?php echo $succes; ?>
                    </p>
                      <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                          <label class="text-white" onclick="customReset();" >Username</label>
                          <input type="text" name="username" class="form-control" value="">
                          <span style="color:red" class="help-block"><?php echo $username_err; ?></span>
                      </div>
                      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                          <label class="text-white">Password</label>
                          <input type="password" name="password" class="form-control" value="">
                          <span style="color:red" class="help-block"><?php echo $password_err; ?></span>
                      </div>
                      <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                          <label style="color:#fff;">Confirm Password</label>
                          <input type="password" name="confirm_password" class="form-control" value="">
                          <span style="color:Red;" class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Submit">
                      </div>
                      <a class="" href="<?php echo get_the_permalink(162) ?>">Login</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </body>
     </html>

  <?php } else { ?>
    <p>Alleen admins kunnen nieuwe gebruikers aanmaken</p>
  <?php } ?>
