<?php

require 'bootstrap.php';


$students = new Students();

if (!empty($_POST['name']) && !empty($_POST['nsuid']) && !empty($_POST['email'])) {
    $last_id = $students->create($_POST['name'], $_POST['nsuid'], $_POST['email'], $_POST['department']);
    header('location: index.php');
} else {
    echo "<h1>post title or body can not be empty</h1>";
    echo "<a href='index.php'>Back to home</a>";
}
