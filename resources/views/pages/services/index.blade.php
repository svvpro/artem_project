@extends('layouts.base')
@section('meta')
    <meta name="description" content="{!! $meta->meta_desc !!}">
    <meta name="keywords" content="{!! $meta->meta_key !!}">
@stop
@section('content')
    <h1>Наши услуги</h1>
    {!! $services->description  !!}
@stop