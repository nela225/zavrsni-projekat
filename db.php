<?php
$conn = new mysqli("localhost", "root", "", "kafic_db");
if ($conn->connect_error) {
    die($conn->connect_error);
}
?>