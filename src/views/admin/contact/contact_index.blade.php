@extends('ad::admin.masterpage')

@if(isset($contacts))
	@section('title', 'Admin Contact - List')
	@section('main-content')
	    @include('ad::admin.contact.contact_list')
	@stop
@endif

@if(isset($contacts_edit))
	@section('title', 'Admin Contact  - Edit')
	@section('main-content')
		@include('ad::admin.contact.contact_edit')
	@stop
@endif

@if(!isset($contacts_edit))
	@section('title', 'Admin Contact  - Add')
	@section('main-content')
		@include('ad::admin.contact.contact_add')
	@stop
@endif

@section('right-menu')
		@include('ad::admin.contact.contact_search')
@stop
