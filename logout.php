<?php

session_start();
 ($SESSION['nombreu']);
session_destroy();
header('Location: http://localhost:8083/trabajo1/index.html');

?>

