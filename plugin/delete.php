<?php
include_once('config.php');

if(isset($_GET['delete']) )
{
  $id = $_GET['delete'];
  $sql = "DELETE FROM user_data WHERE id = $id";
}
if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}
$yourURL = get_the_permalink(171);
echo ("<script>location.href='$yourURL'</script>");

$link->close();

 ?>
