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

$sql = "SELECT Mobile_No, Full_Name,DateOfBirth, no_of_years(DateOfBirth) AS 'years' FROM user_bio;   ";
echo"<div style='padding: 44px'>";
echo'<center>';

//echo "<center>Details for the Subquery Operation of Table User_Status showing ID,Balance,Data where Balance is greater than ID=10005 </center>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr style='background:#f49595;'>";
	    echo "<th>ID</th>";
	    echo "<th>Full_Name</th>";
	    echo "<th>Date of Birth</th>";
	    echo "<th>Age</th>";

	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr class='table-light'>";
	        echo "<td>".$row['Mobile_No']."</td>";
	        echo "<td>".$row['Full_Name']."</td>";
	        echo "<td>".$row['DateOfBirth']."</td>";
	        echo "<td>".$row['years']."</td>";
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
