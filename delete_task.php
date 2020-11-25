<?php

//delete_task.php

include('config.php');


if($_POST["task_list_id"])
{

  $task_list_id = $_POST['task_list_id'];

//echo $task_list_ids ;

$sql =" DELETE FROM `task_list` WHERE `task_list_id` = $task_list_id"; 

 if(mysqli_query($connect, $sql ))
 {
  echo 'done';
 }
 
}


?>
