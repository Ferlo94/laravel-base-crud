@extends('layouts.base')

@section('page-title')
    Creazione nuovo prodotto
@endsection

@section('page-content')
    <h1>CREA un nuovo prodotto</h1>

    <form action="{{route('products.store')}}" method="POST">
        
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">TITOLO</label>
          <input type="text" class="form-control" id="title" name="title">
          <div id="emailHelp" class="form-text">Inserisci un nuovo titolo.</div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" placeholder="Aggiundi la descrizione qui" name="description" style="height: 100px"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Tipologia Film</label>
            <select class="form-select" id="series" name="series">
                <option selected>SELEZIONA UNA OPZIONE</option>
                <option value="1">comic book</option>
                <option value="2">graphic novel</option>
              </select>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="number" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label></label>
            <input type="number" class="form-control" id="type" name="type">
        </div>




        <button type="submit" class="btn btn-primary">CREA</button>

      </form>

@endsection