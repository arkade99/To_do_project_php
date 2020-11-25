<?php

//update_task.php

include('config.php');


if($_POST["task_list_id"])
{
	//echo "Updated000 <br>";

  $task_status = 'yes';
  $task_list_id = $_POST['task_list_id'];

//echo $task_list_ids ;

$sql =" UPDATE `task_list` SET `task_status`='$task_status' WHERE `task_list_id` = '$task_list_id'"; 

 if(mysqli_query($connect, $sql ))
 {
  echo 'done';
 }
 
}


?>
