
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
      $data=$_POST['data'];
      $price=$_POST['price'];
      $life=$_POST['life'];


      $data= array('ID' =>$id , 'Data'=>$data,'Price'=>
       $price,'Life_Time'=>$life);

      DB::table('data_packs')->insert($data);
     echo '<center><h1>successfully inserted</h1></center>';


     echo"<div style='padding: 44px'>";
       echo "<center>";
     echo"<h1>Table: user_bio</h1>";
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

?>
@include('inclues.footer')
