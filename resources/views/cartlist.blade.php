
@extends('master')

@section('content')
<div class=" custom-product">
	
	 <div class="col-sm-10">
	 	<div class="trading-wrapper">
			<h1>cart list</h1>
			
		   @foreach($products as $item)
		  		  <div class="row searched-item cart-list-devide">
		  		  	<div class="col-sm-3">
		  		  		<a href="detail/{{$item->id}}">
				      <img class="trading-img"src="{{$item->gallery}}" >
				       </a>
				  
		  		  	</div>
		  		  	<div class="col-sm-3">
		  		  		<h3>{{$item->name}}</h3>
				        <h5>{{$item->description}}</h5>
		  		  	</div>

				 
				  <div class="col-sm-3">
				  <a class="btn btn-warning" href="/removeCart/{{$item->cart_id}}" >remove from cart</a>
				  </div>
			</div>
		  	@endforeach
		 
		</div>
	 </div>
</div>


@endsection        