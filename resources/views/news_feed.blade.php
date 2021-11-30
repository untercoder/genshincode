@extends('layouts.bootstrap_layout_user')
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include("components.news.news_feed_cmpt")
@stop

