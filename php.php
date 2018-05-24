<?php
include('config.php');
if(isset($_POST['submit']))
{
	$skills = $_POST['key'];
	$data = explode(',', $skills);

	foreach($data as $value )
	{
		$search = "SELECT distinct(id),skill_name FROM skills WHERE skill_name= '$value'";

		$search_query  = mysqli_query($conn,$search) or die(mysqli_error($conn));
		$search_count =  mysqli_num_rows($search_query);

		while($search_fetch = mysqli_fetch_array($search_query))
		{
			if()
			echo $search_fetch['id'].' '.$search_fetch['skill_name'].'<br>';

		}
	}
}
?>
