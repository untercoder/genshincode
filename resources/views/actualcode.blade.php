@extends("layouts.bootstrap_layout_user")
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include("components.guest.textpanel")
    @include("components.guest.table")
@stop



