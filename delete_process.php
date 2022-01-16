<?php
unlink('data/'.$_POST['id']);
header('Location: /WEB2_PHP/index.php');
?>