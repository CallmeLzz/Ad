@extends('ad::admin.masterpage')

@if(isset($samples_category))
	@section('title', 'Admin Categories - List')
	@section('main-content')
	    @include('ad::admin.sample_category.sample_category_list')
	@stop
@endif

@if(isset($samples_category_edit))
	@section('title', 'Admin Categories - Edit')
	@section('main-content')
		@include('ad::admin.sample_category.sample_category_edit')
	@stop
@endif

@if(!isset($samples_category_edit))
	@section('title', 'Admin Categories - Add')
	@section('main-content')
		@include('ad::admin.sample_category.sample_category_add')
	@stop
@endif

@section('right-menu')
	@include('ad::admin.sample_category.sample_category_search')
@stop