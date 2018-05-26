<?php
include('config.php');

session_start();

$id = $_GET['id'];
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$grade = $_POST['grade'];
	$sql = "UPDATE skills SET grade='$grade' WHERE skill_id='$name'";
	$sql_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	// echo "<script>window.location.href='userview.php?id='".$id."'</script>";
}
?>