
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
      $data=$_POST['sms'];
      $price=$_POST['price'];
      $life=$_POST['life'];
      if($id==""||$data==""||$price==""||$life=="")
      {
        die("All fields are required.Try again!");
      }

    else{
      $data= array('ID' =>$id , 'Sms'=>$data,'Price'=>
       $price,'Life_Time'=>$life);

      DB::table('sms_packs')->insert($data);
     echo '<center><h1>successfully inserted</h1></center>';


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
   }

?>
@include('inclues.footer')
