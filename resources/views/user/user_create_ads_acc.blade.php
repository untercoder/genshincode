@extends('layouts.bootstrap_layout_user')
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include('components.user.header_for_form')
    @include('components.user.inputform_acc')
@stop
