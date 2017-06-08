@extends('../../i_layout.app')


@section('content')
<!-- <div class="container"> -->
<div class="ui raised very padded text container segment">
	<h2 class="ui header">Upload Files</h2>
	<div class="ui body">
		<form method="post" action="{{route('file.store')}}" enctype="multipart/form-data" class="ui form">{{ csrf_field() }}
			<div class="field">
				<!-- <label>File upload</label> -->
				<input type="file" name="upload">
			</div>
			<div class="field">
				<a href="{{ URL::previous()}}"><span class="ui primary right aligned basic button">Back</span></a>
				<button type="submit" class="ui primary right aligned basic button">Submit</button>
			</div>
		</form>
	</div>
	
</div>
<!-- </div> -->
@endsection

