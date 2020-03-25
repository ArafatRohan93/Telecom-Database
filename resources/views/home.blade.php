@include('inclues.header')
<center>
  <div class="card border-primary mb-3" style="max-width: 50rem;margin-top:100px" >
    <div class="card-header table-primary"><h1>Admin Login</h1></div>
     <div class="card-body">

  <div class="container"><form style="padding=115px" action="{{url('/adminhome')}}" method="post">
  {{ csrf_field() }}
<table class="table table-hover">
<tr>
      <td>Name</td>
      <td><input type="text" class="form-control"  name="namea"></td>
</tr>
      <tr>
          <td>Password</td>
          <td><input type="password"  class="form-control" name="passa"></td>
</tr>
<tr>

           <td><input type="submit"  class="btn btn-primary" name="Log In"></td>
</tr>

</table>
</form>
</div>
</div>
</div>
</center>


<center>
  <div class="card border-primary mb-3" style="max-width: 50rem;margin-top:100px" >
    <div class="card-header table-primary"><h1>User Login</h1></div>
     <div class="card-body">

  <div class="container"><form style="padding=115px" action="{{url('/userhome')}}" method="post">
  {{ csrf_field() }}
<table class="table table-hover">
<tr>
      <td>Name</td>
      <td><input type="number" class="form-control"  name="nameu"></td>
</tr>
      <tr>
          <td>Password</td>
          <td><input type="password"  class="form-control" name="passu"></td>
</tr>
<tr>

           <td><input type="submit"  class="btn btn-primary" name="Log In"></td>
</tr>

</table>
</form>
</div>
</div>
</div>
</center>

@include('inclues.footer')
