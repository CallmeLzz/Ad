@extends('ad::admin.masterpage')
@section('title', 'Admin Page')

@section('main-content')
    @include('ad::admin.page.content')
@stop

@section('right-menu')
	@include('ad::admin.layout.right_menu')
@stop