<?php 
$name = $details = $path = NULL;
$name = $_POST['name'];
$details = $_POST['details'];
$filepath = $_POST['path'];
$con = mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('management');
$query = "INSERT INTO `module`(`name`, `details`, `path`) VALUES ('".$name."','".$details."','".$filepath."')";
//echo $query;
$result = mysql_query($query);
if($result)
echo "<script>alert('Successful');</script>";
else
echo "<script>alert('Unsuccessful');</script>";
echo "<script>window.location = 'index.php'</script>";

?>