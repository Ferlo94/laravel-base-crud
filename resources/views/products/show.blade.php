@extends('layouts.base')

@section('page-title')
    {{$product->title}}
@endsection

@section('page-content')
<h1>{{$product->title}}</h1>
<img src="{{$product->thumb}}" alt="">
<div>
    {!!$product->description!!}
</div>
@endsection
        