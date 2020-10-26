
@extends('master')

@section('content')
<div class=" custom-product">
	 <div class="col-sm-4">
	 	<a href="#">filter </a>
	 </div>
	 <div class="col-sm-4">
	 	<div class="trading-wrapper">
			<h1>result for a product</h1>
			
		   @foreach($products as $item)
		  		  <div class=" searched-item">
		  		  	<a href="detail/{{$item['id']}}">
				      <img class="trading-img"src="{{$item['gallery']}}" >
				      <div class="">
				        <h3>{{$item['name']}}</h3>
				        <h5>{{$item['description']}}</h5>
				      </div>
				  </a>
				  </div>
		  	@endforeach
		 
		</div>
	 </div>
</div>


@endsection        