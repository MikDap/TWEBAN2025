@extends('layouts.home')  <!-- Estende il layout principale home-guest.blade.php -->
 
@section('title', 'Catalogo')  <!-- Imposta il titolo della pagina -->
 
@section('content')  <!-- Inizio sezione "content" -->
<div id="content">
    @if ($prod->isNotEmpty())  <!-- Controllo se ci sono prodotti nel database -->
        @foreach ($prod as $prodotto)  <!-- Itera su ogni prodotto -->
<div class="prodotto-box">  <!-- Contenitore del prodotto -->
<div class="prodotto-container">  
 
                    <!-- Sezione per l'immagine -->
<div class="immagine">
                        @if ($prodotto->immagine)  <!-- Controlla se esiste un'immagine -->
<img src="{{ asset($prodotto->immagine) }}" alt="Immagine di {{ $prodotto->nome }}">
                        @else
<p>Immagine non disponibile</p>
                        @endif
</div>
 
                    <!-- Sezione informazioni prodotto -->
<div class="info">
<h2 class="titolo">{{ $prodotto->nome }}</h2>
<p class="descrizione">
<strong>Descrizione:</strong> {{ Str::limit($prodotto->descrizione, 100) }}
</p>
<p class="note">
<strong>Note d'Uso:</strong> {{ Str::limit($prodotto->note_tecniche_uso, 100) }}
</p>
</div>
</div>
 
                <!-- Sezione dettagli aggiuntivi -->
<div class="dettagli">
<p>
<strong>Modalità di Installazione:</strong> {!! nl2br(e($prodotto->modalita_installazione)) !!}
</p>
</div>
</div>
        @endforeach
    @else
<p>Non ci sono prodotti disponibili.</p>  <!-- Messaggio se il database è vuoto -->
    @endif
</div>
@endsection  <!-- Fine della sezione "content" -->


<!-- modificare struttura grafica, aggiungere barra di ricerca con logic
a e prod cliccabili per andare a un'altra pagina specifica del prodotto 
lasciare una piccola parte spazio per malfunzionamento-->