
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
    // $id=$_POST['id'];
      $cid=$_POST['caller_id'];
      $rid=$_POST['receiver_id'];
      $dt=$_POST['dt'];
      $duration=$_POST['duration'];


      $data= array( 'Caller_ID'=>$cid,'Receiver_ID'=>
       $rid,'Call_Date_Time'=>$dt,'Duration'=>$duration);

      DB::table('calls')->insert($data);
     echo '<center><h1>successfully inserted</h1></center>';


     echo"<div style='padding: 44px'>";
       echo "<center>";
     echo"<h1>Table: Calls Timeline</h1>";
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

?>
@include('inclues.footer')
