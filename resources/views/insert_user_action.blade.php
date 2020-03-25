
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
      $name=$_POST['fullname'];
      $nid=$_POST['nid'];
      $dob=$_POST['dob'];
      $address=$_POST['address'];


      $data= array('Mobile_No' =>$id , 'Full_Name'=>$name,'NID'=>
       $nid,'DateOfBirth'=>$dob,'Address'=>$address);

      DB::table('user_bio')->insert($data);
     echo '<center><h1>successfully inserted</h1></center>';


     echo"<div style='padding: 44px'>";
       echo "<center>";
     echo"<h1>Table: user_bio</h1>";
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

?>
@include('inclues.footer')
