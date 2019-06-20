<?
include "data.php";

usort($albums, function($record1, $record2) {
  return $record1["year"] < $record2["year"] ? -1 : 1;
});

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  echo json_encode($albums);
};
?>
