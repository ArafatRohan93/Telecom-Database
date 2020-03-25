@include('inclues.header1')
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
  echo"<center> <h1>Welcome</h1> </center>  ";
}

?>
<center>
<div class="card border-primary mb-3" style="max-width: 50rem;" >
  <div class="card-header"><h4>Select Your Role</h4></div>
   <div class="card-body">
  <table class="table table-hover">
  <!--   <tr class="table-light">
        <td>
     <form action="{{url('createtable')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Create Tables(Do not Tuch)" class="btn btn-primary btn-lg btn-block"/>
    </form>
      </td>
    </tr>-->

    <tr class="table-light">
        <td>
      <form action="{{url('adminlogin')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Admin Login" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('userlogin')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="User Login" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>


  </table>
</div>
</div>
</center>
@include('inclues.footer')
