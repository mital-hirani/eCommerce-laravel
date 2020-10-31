
@extends('master')

@section('content')
<div class=" custom-product">
	
	 <div class="col-sm-6">
	 	<table class="table table-striped">
    <thead>
      <tr>
        <th>Price</th>
        <th>{{$total}} Rupees</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>0 Rupees</td>
        
      </tr>
      <tr>
        <td>Delivary</td>
        <td>100</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total + 100}}</td>
      
      </tr>
    </tbody>
  </table>
      <form action="orderplace" method="POST">
      	@csrf
		  <div class="form-group">
		    <textarea class="form-control" placeholder="enter address" name="address"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="">Payment Method:</label>
		    
		    <p><input type="radio"  name="Payment" value="cash"><span>Online Payment</span></p>
		    <p><input type="radio"  name="Payment" value="cash"><span>EMI Payment</span></p>
		    <p><input type="radio"  name="Payment" value="cash"><span>Payment on delivary</span></p>
		    
		  </div>
		  <button type="submit" class="btn btn-default">Order Now</button>
		</form>
	 </div>
</div>


@endsection        