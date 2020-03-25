@include("inclues.header")
  <center>
    <h1>Insert User Info</h1>
    <div class="container"><form style="padding=115px" action="{{url('/insert_user_action')}}" method="post">
		{{ csrf_field() }}
	<table class="table table-hover">
 <tr>
				<td>Mobile No.</td>
				<td><input type="number" class="form-control"  name="id"></td>
 </tr>
			  <tr>
			  		<td>Full Name</td>
			  		<td><input type="text"  class="form-control" name="fullname"></td>
</tr>
			   <tr>
			  		<td>NID NO.</td>
			  		<td><input type="number"  class="form-control" name="nid"></td>
 </tr>
			  <tr>
			  		<td>DOB</td>
			  		<td><input type="text"  class="form-control" name="dob"></td>
 </tr>
			  <tr>
			  		<td>Address</td>
			  		<td><input type="text"  class="form-control" name="address"></td>
</tr>
 <tr>

			  		<td><input type="submit"  class="btn btn-primary" name="submit"></td>
 </tr>

	</table>
	</form>
</div>
</center>



@include("inclues.footer")
