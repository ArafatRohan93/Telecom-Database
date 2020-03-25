
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
 $id=$_POST['id'];
      $blnc=$_POST['balance'];
      $sms=$_POST['sms'];
      $data=$_POST['data'];
      $cp=$_POST['cp'];
      $dp=$_POST['dp'];
      $sp=$_POST['sp'];


      $data= array('ID' =>$id , 'Balance'=>$blnc,'Sms'=>
       $sms,'Data'=>$data,'Call_Packs'=>$cp,'Sms_Packs'=>$sp,'Data_Packs'=>$dp);

      DB::table('user_status')->insert($data);
     echo '<center><h1>successfully inserted</h1></center>';


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
@include('inclues.footer')
