<?php

$link = mysqli_connect('localhost', 'root', '', 'dllsom');

if (mysqli_connect_error()) {
	header("location: error.php");
} else {
	mysqli_set_charset($link, "utf8");
}
