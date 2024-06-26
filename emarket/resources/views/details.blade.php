@extends('layout.app')
@section('content')
    <h2 class="comment">Details</h2>
    
    <div class="details-div">
        
        @if ($produit->categorie=='Electro Menagé')
            <img src="{{url('../img/electroMenage.jpeg')}}" alt="photo" class="card-img-top">
        @elseif($produit->categorie=='Logiciel')
            <img src="{{url('../img/logicielle.jpg')}}" alt="photo" class="card-img-top">
        @elseif($produit->categorie=='Alimentaire')
            <img src="{{url('../img/alimentaire.png')}}" alt="photo" class="card-img-top">
        @else
            <img src="{{url('../img/alimentaire.png')}}" alt="photo" class="card-img-top">

        @endif

        <p> <p class="souligne">Prix:</p>  {{$produit->prix}}FCFA</p>  
        <p> <p>Quantité:</p>  
            {{$produit->quantite}}</p>  
        <p>
            <p class="souligne">Categorie:</p>    
            {{$produit->categorie}}
        </p>

        <p>
            <p class="souligne">Description:</p>
            {{$produit->description}}
        </p>
    </div>

@endsection