<?php

$conn = new mysqli("localhost", "root", "", "phpcrud_botor_mae");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>