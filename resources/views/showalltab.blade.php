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

echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table: User Info</h1>";
echo"<h4>Trigger is applyed here.So after Mobile_No:10006 all user has Full_Name with lower case letters!</h4>";
  echo "</center>";
$sql = "SELECT * FROM user_bio;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>Mobile_No</th>";
     echo "<th>Name</th>";
     echo "<th>NID</th>";
     echo "<th>DateOfBirth</th>";
     echo "<th>Address</th>";
     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
         echo "<td>".$row['Mobile_No']."</td>";
         echo "<td>".$row['Full_Name']."</td>";
         echo "<td>".$row['NID']."</td>";
         echo "<td>".$row['DateOfBirth']."</td>";
         echo "<td>".$row['Address']."</td>";
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

echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table: Calls</h1>";
  echo "</center>";
$sql = "SELECT * FROM calls;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>ID</th>";
     echo "<th>Caller Id</th>";
     echo "<th>Receiver Id</th>";
     echo "<th>Date&Time</th>";
     echo "<th>Duration</th>";

     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
        echo "<td>".$row['ID']."</td>";
   echo "<td>".$row['Caller_ID']."</td>";
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
echo"</div>";

echo "<br><br>";

echo"<div style='padding: 44px'>";
  echo "<center>";
echo"<h1>Table: SMS Timeline:</h1>";
  echo "</center>";
$sql = "SELECT * FROM sms;";
if($result = mysqli_query($link,$sql)){
 if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-hover'>";
     echo "<tr style='background:#f49595;'>";
     echo "<th>ID</th>";
     echo "<th>Caller Id</th>";
     echo "<th>Receiver Id</th>";
     echo "<th>Date&Time</th>";


     echo "</tr>";
     while($row = mysqli_fetch_array($result)) {
        echo "<tr class='table-light'>";
        echo "<td>".$row['ID']."</td>";
   echo "<td>".$row['Sender_ID']."</td>";
   echo "<td>".$row['Receiver_ID']."</td>";
   echo "<td>".$row['Sms_Date_Time']."</td>";

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
echo"<h1>Table: User Status</h1>";
echo "</center>";
$sql = "SELECT * FROM user_status;";
if($result = mysqli_query($link,$sql)){
if (mysqli_num_rows($result) > 0) {
echo "<table class='table table-hover'>";
echo "<tr style='background:#f49595;'>";
echo "<th>ID</th>";
echo "<th>Balance(Taka)</th>";
echo "<th>SMS(Units)</th>";
echo "<th>Data(MB)</th>";
echo "<th>Call Pack</th>";
echo "<th>SMS Pack</th>";
echo "<th>Data Pack</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)) {
 echo "<tr class='table-light'>";
   echo "<td>".$row['ID']."</td>";
   echo "<td>".$row['Balance']."</td>";
   echo "<td>".$row['Sms']."</td>";
   echo "<td>".$row['Data']."</td>";
   echo "<td>".$row['Call_Packs']."</td>";
   echo "<td>".$row['SMS_Packs']."</td>";
   echo "<td>".$row['Data_Packs']."</td>";
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
