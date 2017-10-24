<?php
require_once 'soal2.php';

$bio = new komputer ('20','20','20','20');
echo"<br />";
echo"jumlah monitor  :".$bio->get_monitor();
echo"<br />";
echo"jumlah keyboard :".$bio->get_keyboard();
echo"<br />";
echo"jumlah mouse  :".$bio->get_mouse();
echo"<br />";
echo "jumlah cpu :".$bio->get_cpu();
echo "<br />";
?>