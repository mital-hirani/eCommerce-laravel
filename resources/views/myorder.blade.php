
@extends('master')

@section('content')
<div class=" custom-product">
	
	 <div class="col-sm-10">
	 	<div class="trading-wrapper">
			<h1>orders list</h1>
			
			<br>
			
		   @foreach($orders as $item)
		  		  <div class="row searched-item cart-list-devide">
		  		  	<div class="col-sm-3">
		  		  		<a href="detail/{{$item->id}}">
				      <img class="trading-img"src="{{$item->gallery}}" >
				       </a>
				  
		  		  	</div>
		  		  	<div class="col-sm-3">
		  		  		<h2>{{$item->name}}</h2>
		  		  		<h5>Delivary status : {{$item->status}}</h5>
				        <h5>Patment status : {{$item->payment_status}}</h5>
				        <h5>Patment method : {{$item->payment_method}}</h5>
				        <h5>Delivary address : {{$item->address}}</h5>
				        <h5>Price : {{$item->price}}</h5>
		  		  	</div>

				 
				  <div class="col-sm-3">
				 
				  </div>
			</div>
		  	@endforeach

		   
			<br>
			<br>
		</div>
	 </div>
</div>


@endsection        