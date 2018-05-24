<?php


$conn =mysqli_connect("localhost","root","","test");

$output = '';
$sql = "SELECT * FROM tbl";
$result  = mysqli_query($conn,$sql);
$output .='<div class="table">
				<table class="srtiped">
				<tr>
					<th>id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Delete</th>
				<tr>';
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<td>'.$row['id'].'</td>
		<td class="first-name" data-id="'.$row["id"].'" contenteditable>'.$row['']
	}
}
else
{
	$output .= '<tr>
					<tb>Data not found</td>
				</tr>';
}
$output .= '</table>
	</div>'
?>