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

$query = "SELECT a.*, c.county, b.name FROM advertisements a
			INNER JOIN counties c ON (a.county = c.id_county)
			INNER JOIN districts b ON (a.district = b.id)
			WHERE a.title LIKE '%" . $q . "%' 
			AND a.id_category LIKE '%" . $cat . "%' AND a.status LIKE '%" . 'approved' . "%' 
			ORDER BY a.id_advert DESC ;";



if (!$result = mysqli_query($link, $query)) {
	echo mysqli_error($link);
	exit();
}

$numrows = mysqli_num_rows($result);
if (mysqli_num_rows($result) < 1) {
	$adverts = "no results";
} else {
	$adverts = "";
	while ($row = mysqli_fetch_array($result)) {
		$adverts .= ' 	<div class="col s12 m3">
						<div class="card">
							<span class=""> ' . $row["title"] . '</span>
						   <div class="card-image">
						   <img  height="250" src="/dilaalsom/img/products/' . $row["last_id"] . '/' . $row["main_picture"] . '" >
						  </div>
						  
						  
						  <div class="card-content">
							   <div class="price"> Price: $' . $row["price"] . '</div>
							   <div class="county">County: ' . $row["county"] . '</div>	
							   <div class="county">District: ' . $row["name"] . '</div>	

              			</div>
              			<div class="card-action">
                		<a href="viewad.php?idadvert=' . $row["id_advert"] . '" class="viewad">View Ad</a>
              		</div></div></div>';
	}
}
