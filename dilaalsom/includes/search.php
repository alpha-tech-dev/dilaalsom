<?php
require_once 'dbconnect.php';

if (isset($_GET["q"])) {
	$q	= 	$_GET["q"];
} else {
	$q	= 	"";
}

if (isset($_GET["category"])) {
	$cat	= 	$_GET["category"];
} else {
	$cat	= 	"";
}

$query = "SELECT * FROM advertisements";


if (!$result = mysqli_query($link, $query)) {
	echo mysqli_error($link);
	exit();
}

$numrows = mysqli_num_rows($result);
if (mysqli_num_rows($result) < 1) {
	$adverts = "not results";
} else {
	$adverts = "";
	while ($row = mysqli_fetch_array($result)) {
		$adverts .= ' 	<div class="col s12 m3">
						<div class="card">
							<span class=""> ' . $row["title"] . '</span>
						   <div class="card-image">
						   <img  height="250" src="/dilaalsom/img/products/' . $row["last_id"] . '/' . $row["images"] . '" >
						  </div>
						  
						  
						  <div class="card-content">
               				<div class="price"> Price: $' . $row["price"] . '</div>
							<div class="state">State: ' . $row["state"] . '</div>	
							<div class="district">District: ' . $row["district"] . '</div>	
              			</div>
              			<div class="card-action">
                		<a href="viewad.php?idadvert=' . $row["id"] . '" class="viewad">View Ad</a>
              		</div></div></div>';
	}
}
