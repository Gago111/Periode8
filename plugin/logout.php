<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
$yourURL = get_the_permalink(162);
echo ("<script>location.href='$yourURL'</script>");
die;
?>
</body>
