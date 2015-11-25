@extends('layouts.base')
@section('meta')
    <meta name="description" content="{!! $meta->meta_desc !!}">
    <meta name="keywords" content="{!! $meta->meta_key !!}">
@stop
@section('content')
    <h1>О нас</h1>
    {!! $about->description  !!}
@stop