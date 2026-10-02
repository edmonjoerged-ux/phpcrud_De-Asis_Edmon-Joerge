<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_deasis_edmonjoerge');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>