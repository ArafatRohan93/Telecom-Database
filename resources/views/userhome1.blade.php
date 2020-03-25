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
  echo"<center> <h1>Welcome User</h1> </center>  ";
}

?>
<center>
<div class="card border-primary mb-3" style="max-width: 50rem;" >
  <div class="card-header"><h4>Select Your Operation</h4></div>
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
      <form action="{{url('insert_calls_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add Call" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('insert_sms_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add SMS" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('insert_user_status_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Update User Subcriptions" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
</tr>
    <tr class="table-light">
        <td>
      <form action="{{url('availablepacktab')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="View Available Packs" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
</tr>

  </table>
</div>
</div>
</center>
@include('inclues.footer')
