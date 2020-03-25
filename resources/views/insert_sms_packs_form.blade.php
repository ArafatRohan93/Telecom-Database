@include("inclues.header")
  <center>
    <h1>Insert SMS Pack Info</h1>
    <div class="container"><form style="padding=115px" action="{{url('/insert_sms_packs_action')}}" method="post">
		{{ csrf_field() }}
	<table class="table table-hover">
 <tr>
				<td>ID</td>
				<td><input type="number" placeholder="10_" class="form-control"  name="id"></td>
 </tr>
			  <tr>
			  		<td>SMS</td>
			  		<td><input type="number" placeholder="Number"  class="form-control" name="sms"></td>
</tr>
			   <tr>
			  		<td>Price</td>
			  		<td><input type="number" placeholder="Taka" class="form-control" name="price"></td>
 </tr>
			  <tr>
			  		<td>Validity(Days)</td>
			  		<td><input type="number" placeholder="Days" class="form-control" name="life"></td>
 </tr>

 <tr>

			  		<td><input type="submit"  class="btn btn-primary" name="submit"></td>
 </tr>

	</table>
	</form>
</div>
</center>



@include("inclues.footer")
