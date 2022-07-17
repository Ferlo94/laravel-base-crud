@extends('layouts.base')

@section('page-title')
    {{$product->title}}
@endsection

@section('page-content')
<h1>{{$product->title}}</h1>
<h6>{{$product->type}}</h6>
<img src="{{$product->thumb}}" alt="">
<hr>
<h5>Prezzo: €{{$product->price}}</h5>
<hr>
<div>
    {!!$product->description!!}
</div>
<br>
<h6>Data di uscita: {{$product->sale_date}}</h6>
<br>
<a type="button" class="btn btn-warning" href="{{route('products.index')}}">Torna alla HOME</a>
@endsection
        