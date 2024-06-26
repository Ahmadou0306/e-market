@extends('layout.app')
@section('content')

<div class="container">

    <form action="{{route('add')}} " method="post" class="formAdd">
        <h3 class="formTitle">Ajouter un produit</h3>
    @csrf
    <div class="form-group">
        <label for="">Nom du produits:</label>
        <input type="text"  placeholder="Entrez le nom du produit" name="nom" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Prix:</label>
        <input type="number"  placeholder="Entrez le prix en FCFA" name="prix" min="200" class="form-control" required>

    </div> 
    <div class="form-group">
        <label for="">Quantité:</label>
        <input type="number"  placeholder="Entrez la quantité" name="qte" min="1" class="form-control" required>
    </div>  
    <div class="form-group">
        <label for="product-category">Catégorie :</label>
        <select class="form-control" id="product-category" name="categorie" required>
          <option selected disabled>Choisissez une catégorie</option>
          <option >Logiciel</option>
          <option >Electro Menagé</option>
          <option >Alimentaire</option>
        </select>
    </div> 
    <div class="form-group">
        <label for="product-description">Description :</label>
        <textarea class="form-control" id="product-description" rows="3" placeholder="Entrez la description" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-success btnBtn">Ajouter</button>
</form>
  
</div>
@endsection