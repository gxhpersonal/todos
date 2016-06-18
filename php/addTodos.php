<?php
$mysqli= new mysqli("localhost","root","root","test");
$sql="INSERT INTO `todos`(`id`,`content`,`isdown`) VALUES ('{$_GET['id']}','{$_GET['content']}','{$_GET['isdown']}')";
$mysqli->query($sql);
echo $mysqli->insert_id;