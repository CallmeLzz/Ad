@extends('ad::admin.masterpage')

@if(isset($samples_category))
	@section('title', 'Admin Page - List')
	@section('main-content')
	    @include('ad::admin.sample_category.sample_category_list')
	@stop
@endif

@if(isset($samples_category_edit))
	@section('title', 'Admin Page - Edit-Add')
	@section('main-content')
		@include('ad::admin.sample_category.sample_category_edit')
	@stop
@endif

@if(!isset($samples_category_edit))
	@section('title', 'Admin Page - Edit-Add')
	@section('main-content')
		@include('ad::admin.sample_category.sample_category_add')
	@stop
@endif

@section('right-menu')
	@include('ad::admin.sample_category.sample_category_search')
@stop