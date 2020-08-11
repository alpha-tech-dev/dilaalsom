<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</header>
<?php
$con = mysqli_connect('localhost', 'root', '', 'dllsom');

if (mysqli_connect_error()) {
    header("location: error.php");
} else {
}

?>
<html>

<head>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "get-data.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>

    Select Your Country
    <select onChange="showUser(this.value)">

        <?php
        //$sql = "SELECT * FROM county";
        //$result = mysqli_query($con, $sql);

        $query = "SELECT * FROM counties;";

        $result = mysqli_query($con, $query);

        echo "<option value=''>" . "Select a County" . "</option>";

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id_county'];
            echo "<option value='$id'>" . $row['county'] . "</option>";
        }
        ?>
    </select>

    <div id="txtHint" style="width:100px; border:0px solid gray;">
        <b>your city disp here</b>
    </div>
</body>

</html>