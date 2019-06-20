<?php
include "data.php";
$selected_artist = $_POST["artist_name"];

$artist_records = [];
foreach ($albums as $record) {
  if($record["artist"] == $selected_artist) {
    $artist_records[] = $record;
  }
}

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  echo json_encode($artist_records);
};
?>
