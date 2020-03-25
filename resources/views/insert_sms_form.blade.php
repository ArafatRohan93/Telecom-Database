@include("inclues.user_header")
  <center>
    <h1>Insert SMS Info</h1>
    <div class="container"><form style="padding=115px" action="{{url('/insert_sms_action')}}" method="post">
		{{ csrf_field() }}
	<table class="table table-hover">
 <!--<tr>
				<td>ID</td>
				<td><input type="number" placeholder="10_" class="form-control"  name="id"></td>
 </tr>-->
			  <tr>
			  		<td>Sender Mobile_No</td>
			  		<td><input type="number" placeholder="1000_"  class="form-control" name="caller_id"></td>
</tr>
 </tr>
			  <tr>
			  		<td>Receiver Mobile_No</td>
			  		<td><input type="number" placeholder="1000_" class="form-control" name="receiver_id"></td>
</tr>
			   <tr>
			  		<td>Date Time</td>
			  		<td><input type="datetime" placeholder="yyyy-mm-dd hh-mm-ss" class="form-control" name="dt"></td>
 </tr>

 <tr>

			  		<td><input type="submit"  class="btn btn-primary" name="submit"></td>
 </tr>

	</table>
	</form>
</div>
</center>



@include("inclues.footer")
