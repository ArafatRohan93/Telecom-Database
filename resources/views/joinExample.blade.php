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

$sql = "SELECT user_bio.Mobile_No,user_bio.Full_Name, user_status.Balance,user_status.Data,user_status.Sms,user_status.Call_Packs,user_status.Data_Packs,user_status.SMS_Packs FROM user_bio NATURAL JOIN user_status  ;";
echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details for the NATURAL joint table of'user_BIO' and 'user_status' tables </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>Mobile_No</th>";
	    echo "<th>Full_Name</th>";
	    echo "<th>Balance</th>";
	    echo "<th>Sms</th>";
	    echo "<th>Call_Packs</th>";
	    echo "<th>Data_Packs</th>";
	    echo "<th>SMS_Packs</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['Mobile_No']."</td>";
	        echo "<td>".$row['Full_Name']."</td>";
	        echo "<td>".$row['Balance']."</td>";
	        echo "<td>".$row['Sms']."</td>";
	        echo "<td>".$row['Call_Packs']."</td>";
	        echo "<td>".$row['Data_Packs']."</td>";
	        echo "<td>".$row['SMS_Packs']."</td>";
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
