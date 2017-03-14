@extends('ad::admin.masterpage')

@if(isset($images))
	@section('title', 'Admin Images - List')
	@section('main-content')
	    @include('ad::admin.image.image_list')
	@stop
@endif

@if(isset($images_edit))
	@section('title', 'Admin Images  - Edit')
	@section('main-content')
		@include('ad::admin.image.image_edit')
	@stop
@endif

@if(!isset($images_edit))
	@section('title', 'Admin Images  - Add')
	@section('main-content')
		@include('ad::admin.image.image_add')
	@stop
@endif

@section('right-menu')
		@include('ad::admin.image.image_search')
@stop
