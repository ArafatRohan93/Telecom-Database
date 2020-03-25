@include('inclues.header')
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="Telecom";
// Create connection
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
else{
  echo"<center> <h1>Connected</h1> </center>  ";
}

$sql = "SELECT ID,Price FROM call_packs UNION ( SELECT ID,Price FROM sms_packs ) ; ";
echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details for the Union Operation of Table call_packs and sms_packs </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>ID</th>";
	    echo "<th>Price</th>";

	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['ID']."</td>";
	        echo "<td>".$row['Price']."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
	    echo "0 results";
	}
}
echo'</center>';
echo"</div>";


echo "<br><br>";


 ?>

@include('inclues.footer')
