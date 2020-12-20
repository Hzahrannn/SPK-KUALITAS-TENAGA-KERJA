<?php

$conn = new mysqli("localhost", "himsiuns_pmb20", "Asdwasdw12345", "himsiuns_pmb20");

if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>