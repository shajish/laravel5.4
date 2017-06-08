@extends('../../i_layout.app')

@section('page_title')
ui
@endsection

@section('styles')
<style type="text/css">
	.card{
		border: solid 1px;
		padding: 5px;
	}
</style>
@endsection


@section('content')
<div class="container">
	<section class="front-section">
		<span class="title1">Welcome</span>
		<span class="title2">to our website</span>
	</section>

	<div class="row">
		<div class="col-md-3">
			<div class="card" > 
				<div class="card-block"> 
					<h4 class="card-title">Card title</h4> 
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
					<a href="#" class="btn btn-primary">Go somewhere</a> 
				</div> 
			</div>	
		</div>
		<div class="col-md-6">
			<div class="card" > 
				<div class="card-block"> 
					<h4 class="card-title">Card title</h4> 
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
					<a href="#" class="btn btn-primary">Go somewhere</a> 
				</div> 
			</div>	
		</div>
		<div class="col-md-3">
			<div class="card" > 
				<div class="card-block"> 
					<h4 class="card-title">Card title</h4> 
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
					<a href="#" class="btn btn-primary">Go somewhere</a> 
				</div> 
			</div>	
		</div>
	</div>
</div>
@endsection
