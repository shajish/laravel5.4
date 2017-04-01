@extends('layouts.app')

@section('title', 'Blade')

@section('sidebar')
<!-- @parent -->

<!--     <p>This is appended to the master sidebar.</p> -->
@endsection

@section('stylesheets')
<!-- Calling the default css  -->
	@parent
@endsection

@section('script')
<!-- Calling the default scripts -->
	@parent
@endsection


@section('content')



<div class="ui raised very padded text container segment">
	<h2 class="ui header">Compnay name: {{ $company or "Freelancer"}}</h2>
	<p>{{ $datetime }} </p>
	<p>This is my body content.</p>
</div>



@endsection