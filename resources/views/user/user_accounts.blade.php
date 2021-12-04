@extends('layouts.bootstrap_layout_user')
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include("components.user.user_bar")
    @include("components.user.button")
    @include("components.user.card_component")
@stop

