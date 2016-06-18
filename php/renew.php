<?php
$mysqli= new mysqli("localhost","root","root","test");
$sql="UPDATE `todos` SET `content`='{$_GET['content']}', `isDown`='{$_GET['isDown']}' WHERE `id`={$_GET['id']}";
$mysqli->query($sql);
echo "success";
?>