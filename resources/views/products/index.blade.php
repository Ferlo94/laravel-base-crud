@extends('layouts.base')

@section('page-title')
    Tutti i Film
@endsection

@section('page-content')
    <h1>Tutti i Film</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Copertina</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)

            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td><img src="{{$product->thumb}}"></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td></td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
@endsection