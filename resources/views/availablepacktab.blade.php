@include('inclues.user_header')
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



echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table:Data Packs</h1>";
  echo "</center>";
$sql = "SELECT * FROM data_packs;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>ID</th>";
     echo "<th>Data Vol.</th>";
     echo "<th>Price</th>";
     echo "<th>Validity</th>";

     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
         echo "<td>".$row['ID']."</td>";
         echo "<td>".$row['Data']."</td>";
         echo "<td>".$row['Price']."</td>";
         echo "<td>".$row['Life_Time']."</td>";
         echo "</tr>";
     }

     echo "</table>";
 }
 else {
     echo "0 results";
 }
}
echo"</div>";

echo "<br><br>";


echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table:Call Packs</h1>";
  echo "</center>";
$sql = "SELECT * FROM call_packs;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>ID</th>";
     echo "<th>TalkTime Vol.</th>";
     echo "<th>Price</th>";
     echo "<th>Validity</th>";

     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
         echo "<td>".$row['ID']."</td>";
         echo "<td>".$row['TalkTime']."</td>";
         echo "<td>".$row['Price']."</td>";
         echo "<td>".$row['Life_Time']."</td>";
         echo "</tr>";
     }

     echo "</table>";
 }
 else {
     echo "0 results";
 }
}
echo"</div>";

echo "<br><br>";

echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table: SMS Packs</h1>";
  echo "</center>";
$sql = "SELECT * FROM sms_packs;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>ID</th>";
     echo "<th>SMS Vol.</th>";
     echo "<th>Price</th>";
     echo "<th>Validity</th>";

     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
         echo "<td>".$row['ID']."</td>";
         echo "<td>".$row['Sms']."</td>";
         echo "<td>".$row['Price']."</td>";
         echo "<td>".$row['Life_Time']."</td>";
         echo "</tr>";
     }

     echo "</table>";
 }
 else {
     echo "0 results";
 }
}
echo"</div>";

echo "<br><br>";

?>
@include("inclues.footer")
