<?php
session_name('chuletta');
session_start();
session_destroy();
header('location: ../index.php');
exit;

?>