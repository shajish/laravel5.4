@extends('../../i_layout.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
@endsection


@section('content')
<!-- <div class="ui container"> -->
<div class="ui raised very padded text container segment">

	<h2 class="ui header">All uploaded files</h2>
	<a href="{{route('file.create')}}">
		<button class="ui primary right aligned basic button">Add more</button>
	</a>
	<table class="ui unstackable table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th class="right aligned">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $file)
			<tr>
				<td>{{$file->file}}</td>
				<td>{{$file->file_type}}</td>
				<td class="right aligned">
					<div class="ui icon buttons">
						<div class="ui buttons">
							<a href="{{route('file.show',$file->id)}}"><button class="ui button">View</button></a>
							<form action="{{route('file.destroy',$file->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button class="ui button" type="submit" >Remove</button>
								<!-- <input type="submit" name=""> -->
							</form>
							<!-- <a href=""><button class="ui button">Remove</button></a> -->
						</div>
					</div>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
</div>
<!-- </div> -->

@endsection



@section('scripts')
<script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
<script type="text/javascript">
$(function () {
@if(Session::has('message'))
	toastr.success('{{Session::get('message')}}');
@endif	
});

</script>
@endsection
