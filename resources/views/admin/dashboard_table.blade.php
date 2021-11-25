@extends("layouts.bootstrap_layout_admin")
@section("title")
    {{$title}}
@endsection
@section("app_body")
  @include("components.admin.adminbar")
  @include("components.admin.datatable")
@stop
