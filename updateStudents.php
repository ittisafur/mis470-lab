<?php

require 'bootstrap.php';


$student = new Students();

$student->update($_POST['id'], $_POST['name'], $_POST['nsuid'], $_POST['email'], $_POST['department']);

header('location: index.php');
