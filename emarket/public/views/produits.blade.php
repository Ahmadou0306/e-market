@extends('layout.app')
@section('content')

<div class="container">


<h2>Liste des produits</h2>

        @if ($produits->count()==0)
            <h3 class="comment">Pas d'article Pour le moment</h3>
        @else
        @foreach ($produits as $produit)
        <div class="card bg-light d-inline-block rounded">
            @if ($produit->categorie=='Electro Menagé')
            <img src="{{url('../img/electroMenage.jpeg')}}" alt="photo" class="card-img-top">
        @elseif($produit->categorie=='Logiciel')
            <img src="{{url('../img/logicielle.jpg')}}" alt="photo" class="card-img-top">
        @elseif($produit->categorie=='Alimentaire')
            <img src="{{url('../img/alimentaire.png')}}" alt="photo" class="card-img-top">
        @else
        <img src="{{url('../img/alimentaire.png')}}" alt="photo" class="card-img-top">

        @endif
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{route('info',['id'=>$produit->id])}}" class="btn btn-light">
                        {{$produit->nom}}
                    </a> 
                </h5>
                <div class="card-text">
                    <p >prix: {{$produit->prix}} FCFA</p>
                    <p >Quantité: {{$produit->quantite}} </p>
                </div>
                <a href="{{route('info',['id'=>$produit->id])}}" class="btn btn-link">Voir plus...</a>
            </div>
            <div>
                <a href="{{route('formUpdate',['id'=>$produit->id])}}" class="btn btn-success">Modifier</a>
                <a href="{{route('supprimer',['id'=>$produit->id])}}" class="btn btn-danger" onclick="confirm('Etes vous sur de vouloir supprimer ce produits ?')">Supprimer</a>
            </div>
       </div>
        @endforeach
    @endif
</div>

@endsection
