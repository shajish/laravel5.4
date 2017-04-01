@extends('layouts.app')


@section('content')
<div class="container">

	<div class="ui container">
		<h2 class="ui header">
			<img class="ui image" src="/images/icons/school.png">
			<div class="content">
				Learn More
			</div>
		</h2>
		<div class="ui secondary pointing menu">
			<a class="item">
				Home
			</a>
			<a class="item">
				Messages
			</a>
			<a class="item">
				Friends
			</a>
			<div class="right menu">
				<a class="ui item">
					Logout
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
