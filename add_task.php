<?php

//add_task.php

include('config.php');


if($_POST["task_name"])
{
	//echo "Updated000 <br>";

  $task_details = $_POST['task_name'];
  $task_status = 'no';

//echo $task_details ;

$sql =" INSERT INTO `task_list`( task_details, task_status) VALUES ('$task_details', '$task_status')"; 

 if(mysqli_query($connect, $sql ))
 {
  

  echo '<a href="index.php" class="list-group-item" >'.$_POST["task_name"].' <span class="badge" >X</span></a> ';

 }
 
}


?>
