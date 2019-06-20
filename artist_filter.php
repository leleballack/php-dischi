<?php
include "data.php";
$selected_artist = $_POST["artist_name"];

$artist_records = [];
foreach ($albums as $record) {
  if($record["artist"] == $selected_artist) {
    $artist_records[] = $record;
  }
};

 /*array_filter not working */
// $artist_records = array_filter($albums, function($record) use($selected_artist) {
//  return $record['artist'] == $selected_artist;
// });

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  echo json_encode($artist_records);
};
?>
