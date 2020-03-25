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

$sql = "SELECT ID, Receiver_ID, Call_Date_Time, Duration FROM calls WHERE Caller_ID=10001 OR  Caller_ID=10000 ;";
echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details of 'calls' table where Caller_ID is either 10001 or 10000</center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>ID</th>";
	    echo "<th>Receiver_ID</th>";
	    echo "<th>Call_Date_Time</th>";
	    echo "<th>Duration</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['ID']."</td>";
	        echo "<td>".$row['Receiver_ID']."</td>";
	        echo "<td>".$row['Call_Date_Time']."</td>";
	        echo "<td>".$row['Duration']."</td>";
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

$sql = "SELECT ID,Balance,Data, Call_Packs, Data_Packs FROM user_status ORDER By Data ,Balance desc;";
echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details of 'user_status' table ORDER By Balance, Data desc </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>ID</th>";
	    echo "<th>Balance</th>";
	    echo "<th>Data</th>";
	    echo "<th>Call_Packs</th>";
	    echo "<th>Data_Packs</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['ID']."</td>";
	        echo "<td>".$row['Balance']."</td>";
	        echo "<td>".$row['Data']."</td>";
	        echo "<td>".$row['Call_Packs']."</td>";
	        echo "<td>".$row['Data_Packs']."</td>";
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


$sql = "SELECT Receiver_ID, COUNT(*) FROM sms GROUP BY Receiver_ID;";

echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details of 'sms' table COUNT(*) Group By Receiver_ID </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>Receiver_ID</th>";
	    echo "<th>Values(COUNT)</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['Receiver_ID']."</td>";
	        echo "<td>".$row['COUNT(*)']."</td>";
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


$sql = "SELECT MAX(Balance),ID FROM user_status;";

echo"<div style='padding: 44px'>";
echo'<center>';

echo "<center>Details of 'user_info' for maximum Balance</center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>MAX(Balance)</th>";
	    echo "<th>ID(COUNT)</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['MAX(Balance)']."</td>";
	        echo "<td>".$row['ID']."</td>";
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
