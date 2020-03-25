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
  echo"<center> <h1>Welcome Admin</h1> </center>  ";

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
      <form action="{{url('insertdata')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add New User" class="btn btn-primary btn-lg btn-block"/>
    </form>
      </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('insert_data_packs_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add Data Packs" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('insert_call_packs_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add Call Packs" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('insert_sms_packs_form')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Add SMS Packs" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
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
      <div class="card-header"><center><h4>Query Operations</center></h4></div>
    </td>
      </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('showalltab')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Show All Tab" class="btn btn-primary btn-lg btn-block"/>
    </form>
      </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('aggrigateExample')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Aggregate Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
      </td>
    </tr>

    <tr class="table-light">
        <td>
      <form action="{{url('joinExample')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Join Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('setop')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Set Operation Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('subquery')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Sub-Query Operation Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>

    <tr class="table-light">
        <td>
      <form action="{{url('function')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Function Operation Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>
    <tr class="table-light">
        <td>
      <form action="{{url('procedure')}}" method="post">
       {{ csrf_field() }}
    <input type="submit"  value="Procedure Operation Example" class="btn btn-primary btn-lg btn-block"/>
    </form>
  </td>
    </tr>

  </table>
</div>
</div>
</center>
@include('inclues.footer')
