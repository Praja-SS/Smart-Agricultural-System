
<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM register 
WHERE id != '".$_SESSION['id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table-bordered table-striped">
 <tr>
  <th width="70%">Username</td>
  <th width="20%">Status</td>
  <th width="70%">Action</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['id'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label green-text">Online</span>';
 }
 else
 {
  $status = '<span class="label red-text">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['farmername'].' '.count_unseen_message($row['id'], $_SESSION['id'], $connect).' '.fetch_is_type_status($row['id'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="submit" class="btn waves-effect waves-light blue white-text start_chat"  data-touserid="'.$row['id'].'" data-tousername="'.$row['farmername'].'"> Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
