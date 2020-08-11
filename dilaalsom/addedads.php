<?php
require 'header.php';
require('includes/search.php');
$last_id =     $_GET["last_id"];
$query3 = "SELECT * FROM advertisements WHERE last_id = '$last_id';";
$result3 = mysqli_query($link, $query3);
$row3 = mysqli_fetch_array($result3);
$c = $row3['county'];

$county = $row3['county'];
$query1 = "SELECT * FROM counties WHERE id_county = $county ;";
$result1 = mysqli_query($link, $query1);
$row1 = mysqli_fetch_array($result1);

$query2 = "SELECT * FROM districts WHERE county_id = $c  ;";
$result2 = mysqli_query($link, $query2);
$row2 = mysqli_fetch_array($result2);

?>

<style>
    .ss {
        margin: auto;
        width: 50%;
        padding: 10px;
    }
</style>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.form.js"></script>
    <script>
        function preview_images() {
            var total_file = document.getElementById("mainpicture").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
            }
        }
    </script>
</head>

<div class="">
    <div class="ss">
        <b>
            <h5>Congrats! You have Successfully placed your addvert. ID : <?php echo $row3["id_advert"]; ?> </h5>
        </b>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <b>
                        <u>
                            <div class="price"> Advert Details</div>
                        </u>
                    </b>
                    <?php echo '
                            <b>
                        <div class="price"> Advert ID: ' . $row3["id_advert"] . '</div> 
                        </b>
                        <div class="price"> Tile: ' . $row3["title"] . '</div>
                        <div class="price"> Price: $' . $row3["price"] . '</div>
                        <div class="county">County: ' . $row1["county"] . '</div>
                        <div class="county">District: ' . $row2["name"] . '</div>
                        <div class="price"> Description: ' . $row3["description"] . '</div>';
                    ?>
                </div>
                <b>
                    <u>
                        <div class="price"> Advert Status</div>
                    </u>
                </b>

                <i>
                    <div class="price"> Dilaalsom charges 10% of the price of your placed advert.</div>

                </i>
                <div class="price"> Advert Fee: <b> $10 </b></div>
                <div class="price"> Status: <b> Pending </b></div>
                </br>
                <center>
                    <b>
                        <div class="price">***Please pay the Advert fee to <b>Dilaal Somali Market's Account number (011112122) </b>
                            then forward a copy of your reciept or screenchot to us via email quoting the advert ID***
                    </b>
            </div>
            </i>
            </br>
            <div>Please Do not hesitate to contact us for further clarifications on the Advert fee.
            </div>
        </div>
        </br>
        <center> <button><a href="index.php" class=" viewad">Finish Placing</a></center>
        </button>
    </div>
</div>
</div>
</div>
<?php
include('footer.php');
?>
</footer>