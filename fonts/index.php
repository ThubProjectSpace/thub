        <?php
        $conn = mysqli_connect('localhost','root','','digiprofile');

          $key = 'c++'; //$_POST['key'];
          $key_search = "SELECT * FROM skills WHERE skill_name='$key'";
          $key_query  = mysqli_query($conn,$key_search) or die(mysqli_error($conn));
          $i=0;
        while($key_fetch = mysqli_fetch_array($key_query))
        {
            $key_id =  $key_fetch['id'];
            $sql = "SELECT * FROM register WHERE id='$key_id'";
            $sql_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $sql_fetch = mysqli_num_rows($sql_query);
            $rows = mysqli_fetch_array($sql_query);
            $name = $rows['first_name'];
         	echo $name.'<br>';
	    }
  
    ?>