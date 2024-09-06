<?php

$connection = mysqli_connect("localhost","root","","job_portal");
if(isset($_REQUEST['registerbtn']))
{
	$name=$_REQUEST['name'];
	$profession=$_REQUEST['profession'];
	$feedback=$connection->real_escape_string(''.$_REQUEST['feedback']);

	
	$fimage=$_FILES['fimage']['name'];
	$temp_name1 = $_FILES['fimage']['tmp_name'];
	
	$query = "SELECT * FROM tbl_feedback";
	$query_run=mysqli_query($connection, $query);
	$num=mysqli_num_rows($query_run);
	
	
		if(!empty($name) && !empty($profession) && !empty($feedback))
		{
			
			$query="INSERT INTO tbl_feedback (name,profession,feedback,fimage) VALUES ('$name','$profession','$feedback','$fimage')";
			$query_run=mysqli_query($connection, $query);
			move_uploaded_file($temp_name1,"admin/upload/.$fimage");
			   if($query_run){
                
                    $_SESSION['success'] = "Blog Added";
                    header('Location: feedback.php');
			   }
			   else{
                    $_SESSION['error'] = "Blog Not Added";
                    header('Location: feedback.php');  
			   }
		}
	
	
}
?>