<?php

//require 'dbconnect.php';

function displayCounties($countysel)
{
	global $link;
	$query = "SELECT * FROM locations;";
	$result = mysqli_query($link, $query);

	$content = "";
	#
	/* get the number of rows of an array 
		echo mysqli_num_rows($result);
	*/
	#exit();

	while ($row = mysqli_fetch_array($result)) {
		if ($countysel == $row["id"]) {
			$selected = "selected='selected' ";
		} else {
			$selected = "";
		}

		$content .= "<option value='" . $row["id"] . "' " . $selected . ">" . $row["name"] . "</option>";
	}
	return $content;
}

function displayCategories($cat)
{
	global $link;
	$query = "SELECT * FROM categories;";
	$result = mysqli_query($link, $query);

	$content = "";
	#
	/* get the number of rows of an array 
		echo mysqli_num_rows($result);
	*/
	#exit();

	while ($row = mysqli_fetch_array($result)) {
		if ($cat == $row["id"]) {
			$selected = "selected='selected' ";
		} else {
			$selected = "";
		}

		$content .= "<option value='" . $row["id"] . "' " . $selected . ">" . $row["name"] . "</option>";
	}
	return $content;
}


function getCountyName($idcounty)
{
	global $link;
	$query = "SELECT county FROM counties 
			WHERE id_county = '$idcounty';";
	$result =	mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	return $row["county"];
}


function showAdvert($idadvert)
{
	global $link;
	$queryupd	=	"UPDATE advertisements SET 
								ad_views = (ad_views+1)
								WHERE id = '$idadvert';";
	mysqli_query($link, $queryupd);
	###############################################



	$query2 = "SELECT * FROM advertisements WHERE id = '$idadvert';";

	$result2 = mysqli_query($link, $query2);
	$row2 = mysqli_fetch_array($result2);

	$email =  $_SESSION["email"];
	$query3 = "SELECT * FROM users WHERE email = '$email';";
	$result3 = mysqli_query($link, $query3);
	$row3 = mysqli_fetch_array($result3);

	$id = $row2["last_id"];
	$imagesDirectory = "/dilaalsom/img/products/$id";

	echo $imagesDirectory;
	//if (is_dir("$imagesDirectory")) {
	$opendirectory = opendir($imagesDirectory);
	//if (is_dir($opendirectory)) {
	if (!file_exists($opendirectory)) {

		while (($image = readdir($opendirectory)) !== false) {
			if (($image == '.') || ($image == '..')) {
				continue;
			}

			$imgFileType = pathinfo($image, PATHINFO_EXTENSION);

			if (($imgFileType == 'jpg') || ($imgFileType == 'png')) {
				echo "<img src='images/" . $image . "' width='200'> ";
			}
		}
	}
	closedir($opendirectory);
	//	}


	###############################################
	#print_r($row);

	$advert = '
		<div class="row">
		<div class="col s12"><h2>' . $row2["title"] . '</h2></div>
		<div class="col s12 m6">
		<img  height="500" src="/dilaalsom/img/products/' . $row2["last_id"] . '/' . $row2["images"] . '" alt="Picture" >
		<div class="row">

		<div class="col s12 m3">
		
		  <img src="' . $row2["images"] . '" alt="picture" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3 ">
          <img src="https://source.unsplash.com/1600x900/?cameras" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?electronics" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?vinyl" alt="" class="materialboxed responsive-img">
        </div>
      </div>
		</div>

		<div class="col s12 m6">
		<div class="pricefull"><span class="wdth"><h4>Asking Price:</span><strong> € ' . $row2["price"] . '</h4></strong></div>
		<div>';

	if (isset($_SESSION['firstname'])) {
		$advert .= '
			<form action="" method="POST">
			<label>Make an offer:</label>
				 <div class="input-field">
              <input type="number" name="offer" placeholder="Your offer">       
            	<input type="submit" value="Place Offer" class="btn"></div>
			</form>';
	} else {
		$advert .= '
			<p class="contactven">To place an offer please login <a href="signup.php">sign up</a> or <a href="login.php">login</a></p>';
	};

	$advert .= '   
		</div>
		<div class="infoad"><span class="wdthl">Seller:</span> <b> ' . $row3["firstname"] . '</b><br/>
		<span class="wdth">Location:</span> <b>' . $row3["county"] . '</b><br/><br/><hr>
		<span class="wdth">Entered: </span>' . date("F d, Y", strtotime($row2["date_posted"])) . '<br/>
		<span class="wdth">Ad Views: </span><b>' . $row2["ad_views"] . '</b><hr></div>
		</div>';



	'<div class="col s12 m6">
		<div class="contact">
		';

	if (isset($_SESSION["firstname"])) {

		if ($row2["contact_byphone"] == 1) {
			$advert .= '<div class="col s12 m6">
		<h4 class="ph">Mobile</h4>
		<div class="phnum">
		<p class="numberstyle">' . $row2["phone"] . '</p>
		</div></div>';
		}



		if ($row2["message_center"] == 1) {


			$advert .= '
			<div class="col s12 m6">
			<h4 class="firstmg">Message</h4>
			<form action="mailer.php" method="post" name="infodet" class="infodet" id="infodet">
			<input type="hidden" name="firstname" value="' . $_SESSION["firstname"] . '" />
			<input type="hidden" name="lastname" value="' . $_SESSION["lastname"] . '" />
			<input type="hidden" name="email" value="' . $_SESSION["email"] . '" />
			<input type="hidden" name="emailseller" value="' . $row2["email"] . '" />
			<input type="hidden" name="title" value="' . $row2["title"] . '" />
			<input type="hidden" name="idadvert" value="' . $row2["id"] . '"/>
			<textarea name="message" placeholder="Enter your query here"></textarea>
			<button type="submit" class="btn">Send message</button>
			</form></div></div>';
		}
	} else {
		$advert .= '
			<div class="col s12 m6">
			<h5 class="firstmg">Send Message</h5>
			<p class="contactven">To ask a question please <a href="signup.php">sign up</a> or <a href="login.php">login</a></p></div></div></div>';
	};



	$advert .= '
		<div class="row">
		<div class="col s12">
		<div class="detail">
			<div class="description">
			<h4>Description: </h4>
			' . $row2["description"] . '</div>		
	</div></div>';

	$advert .= '
			<div class="row">
			<div class="col s12">
			<h4>Comments and offers</h4>
			<div>

			</div>
			</div>
			</div>
		';

	return $advert;
}
?>


<!--	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M8NSATYUW2UNC">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->