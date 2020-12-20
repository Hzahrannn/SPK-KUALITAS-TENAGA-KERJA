<?php

$conn = new mysqli("localhost", "himsiuns_pmb", "pmb2019", "himsiuns_minatbakat");
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>