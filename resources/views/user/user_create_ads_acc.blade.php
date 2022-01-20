@extends('layouts.bootstrap_layout_user')
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include('components.user.inputform_acc')
@stop
