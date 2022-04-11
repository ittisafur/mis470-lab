<?php

require 'bootstrap.php';

$student = new Students();
if (!empty($_GET['id'])) {
    $student->delete($_GET['id']);
}


header('location: index.php');
