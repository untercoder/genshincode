@extends("layouts.bootstrap_layout_admin")
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include("components.admin.adminbar")
    @include("components.admin.inputform_news_cmpt")
@stop
