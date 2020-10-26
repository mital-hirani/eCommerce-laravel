
@extends('master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
		   <img  class="detail-img" src="{{$product['gallery']}}" alt="">
		</div>
		<div class="col-sm-6">
			<a href="/">Go back</a>
			<h2>
				Name : {{$product['name']}}
			</h2> 
			<h3>
				Price : {{$product['price']}}
			</h3>
			<h3>
				category : {{$product['category']}}
			</h3>
			<h3>
				description : {{$product['description']}}
			</h3>
			
			<br>
			<form action="/add_to_cart" method="post">
				@csrf
				<input type="hidden" name="product_id" value="{{$product['id']}}">
				<button class="btn btn-success">Add to cart</button>
			</form>
			
			<br>
			<br>
			<button class="btn btn-primary">By now</button>
			<br>
			<br>
		</div>
	</div>
			
	
</div>
@endsection        