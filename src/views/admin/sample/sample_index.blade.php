@extends('ad::admin.masterpage')
@section('title', 'Admin Menu Page')

@if(isset($samples))
	@section('main-content')
	    @include('ad::admin.sample.sample_list')
	@stop
@endif

@if(isset($samples_edit))
	@section('main-content')
		@include('ad::admin.sample.sample_edit')
	@stop
@endif

@section('right-menu')
	
@stop