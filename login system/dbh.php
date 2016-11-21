<?php
$conn = mysqli_connect("localhost", "root", "", "loginweb");
if (!$conn) {
	die("Failed to Connect:".mysqli_connect_error());
}