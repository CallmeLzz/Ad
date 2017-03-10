@extends('ad::admin.masterpage')

@if(isset($samples))
	@section('title', 'Admin Sample - List')
	@section('main-content')
	    @include('ad::admin.sample.sample_list')
	@stop
@endif

@if(isset($samples_edit))
	@section('title', 'Admin Sample  - Edit')
	@section('main-content')
		@include('ad::admin.sample.sample_edit')
	@stop
@endif

@if(!isset($samples_edit))
	@section('title', 'Admin Sample  - Add')
	@section('main-content')
		@include('ad::admin.sample.sample_add')
	@stop
@endif

@section('right-menu')
		@include('ad::admin.sample.sample_search')
@stop
