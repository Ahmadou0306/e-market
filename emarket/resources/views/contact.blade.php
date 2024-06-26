@extends('layout.app')
@section('content')
<div class="container">

    <h3 class="comment">Nous Contacter</h3>
    <form action="{{route('contact')}}" method="post" class="">
    @csrf
    <div class="form-group">
        <label for="">Nom:</label>
        <input type="text"  placeholder="Entrez votre nom de famille" name="nom" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Prenom:</label>
        <input type="text"  placeholder="Entrez votre prenom" name="prenom" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="email"  placeholder="Entrez votre email" name="mail"class="form-control" required>
    </div> 
    <div class="form-group">
        <label for="">Age:</label>
        <input type="number"  placeholder="Entrez votre age" name="age" min="10" max="100" class="form-control" required>
    </div>  
    <div class="form-group">
        <label for="product-description">Dites nous:</label>
        <textarea class="form-control" id="product-description" rows="5" placeholder="Entrez la description" name="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary btnBtn">Ajouter</button>
</form>
  
</div>
@endsection