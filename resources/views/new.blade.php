@extends('layouts.bootstrap_layout_user')
@section("title")
    {{$title}}
@endsection
@section("app_body")
    @include('components.news.header_new')
    @include('components.news.news_body')
@stop
