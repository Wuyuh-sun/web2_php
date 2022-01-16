<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /WEB2_PHP/index.php?id='.$_POST['title']);
?>