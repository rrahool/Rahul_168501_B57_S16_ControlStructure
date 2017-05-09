<?php


$temp = $_GET['temp'];

file_put_contents("templog.txt",$temp."\n",FILE_APPEND);

$whatIread = file_get_contents("templog.txt");

echo nl2br($whatIread);

?>