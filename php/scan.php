<?php
$allFiles = scandir('journeys/'); // Or any other directory
$files = array_diff($allFiles, array('.', '..'));
echo json_encode($files);
?>
