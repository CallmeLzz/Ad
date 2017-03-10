@extends('ad::admin.masterpage')

@if(isset($samples))
	@section('title', 'Admin Page - List')
	@section('main-content')
	    @include('ad::admin.sample.sample_list')
	@stop
@endif

@if(isset($samples_edit))
	@section('title', 'Admin Page - Edit-Add')
	@section('main-content')
		@include('ad::admin.sample.sample_edit')
	@stop
@endif

@if(!isset($samples_edit))
	@section('title', 'Admin Page - Edit-Add')
	@section('main-content')
		@include('ad::admin.sample.sample_add')
	@stop
@endif

@section('right-menu')
	
@stop