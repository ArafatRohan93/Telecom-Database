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

$sql = "SELECT ID, Balance,Data FROM user_status WHERE Balance >  ( SELECT Balance FROM user_status WHERE ID = '10005' ) ;   ";
echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details for the Subquery Operation of Table User_Status showing ID,Balance,Data where Balance is greater than ID=10005 </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>ID</th>";
	    echo "<th>Balance</th>";
	    echo "<th>Data</th>";

	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['ID']."</td>";
	        echo "<td>".$row['Balance']."</td>";
	        echo "<td>".$row['Data']."</td>";
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
