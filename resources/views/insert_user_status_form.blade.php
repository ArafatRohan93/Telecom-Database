@include("inclues.header")
  <center>
    <h1>Insert User Status</h1>
    <div class="container"><form style="padding=115px" action="{{url('/insert_user_status_action')}}" method="post">
		{{ csrf_field() }}
	<table class="table table-hover">
 <tr>
				<td>Mobile No.</td>
				<td><input type="number" placeholder="1000_" class="form-control"  name="id"></td>
 </tr>
			  <tr>
			  		<td>Balance</td>
			  		<td><input type="text" placeholder="Taka"  class="form-control" name="balance"></td>
</tr>
			   <tr>
			  		<td>SMS</td>
			  		<td><input type="number" placeholder="Number"  class="form-control" name="sms"></td>
 </tr>
			  <tr>
			  		<td>Data</td>
			  		<td><input type="number" placeholder="MB" class="form-control" name="data"></td>
 </tr>
			  <tr>
			  		<td>Call_Pack</td>
			  		<td><input type="number" placeholder="10_"  class="form-control" name="cp"></td>
</tr>
			  <tr>
			  		<td>SMS_Pack</td>
			  		<td><input type="number" placeholder="10_" class="form-control" name="sp"></td>
</tr>
			  <tr>
			  		<td>Data_Pack</td>
			  		<td><input type="number" placeholder="10_" class="form-control" name="dp"></td>
</tr>
 <tr>

			  		<td><input type="submit"  class="btn btn-primary" name="submit"></td>
 </tr>

	</table>
	</form>
</div>
</center>



@include("inclues.footer")
