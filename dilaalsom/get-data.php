
<?php
require 'includes/dbconnect.php';

$q = $_GET["q"];
$sql = "SELECT * FROM districts WHERE county_id ='$q'";

$result = mysqli_query($link, $sql);
echo "<label>
<h6> <b>District *</b> </h6>
</label>";

echo "<select>";


echo "<option value=''>" . "Select a District" . "</option>";

while ($row = mysqli_fetch_array($result)) {

    echo "<option>" . $row['name'] . "</option>";
}
echo "</select>";
