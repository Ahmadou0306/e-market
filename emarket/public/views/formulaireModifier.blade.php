@extends('layout.app')
@section('content')
<div class="container">



<form action="{{route('modifier')}} " method="post" class="formAdd">
    <h3 class="formTitle">Modifier un produit</h3>
    @csrf
    <input type="hidden" value="{{$produit->id}}" name="id">
    <div class="form-group">
        <label for="">Nom du produits:</label>
        <input type="text" placeholder="Entrez le nom du produit" name="nom" class="form-control" required value="{{$produit->nom}}">
    </div>
    <div class="form-group">
        <label for="">Prix:</label>
        <input type="number" placeholder="Entrez le prix en FCFA" name="prix" min="200" class="form-control" required value="{{$produit->prix}}">
    </div>      
    <div class="form-group">
        <label for="">Quantité:</label>
        <input type="number" placeholder="Entrez la quantité" name="qte" min="1" class="form-control" required value="{{$produit->quantite}}"><span>FCFA</span>
    </div>  
    <div class="form-group">
        <label for="product-category">Catégorie :</label>
        <select class="form-control" name="categorie" required>
            <?php
            $categories = array('Logiciel', 'Electro Menagé', 'Alimentaire');
            foreach ($categories as $cat) {
                $selected = ($cat == $produit->categorie) ? 'selected' : '';
                echo "<option value=\"$cat\" $selected>$cat</option>";
            }
            ?>
        </select>
    </div>  
    
    <div class="form-group">
        <label for="product-description">Description :</label>
        <textarea name="description" class="form-control" rows="3" placeholder="Entrez la description" >{{$produit->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success btnBtn">Modifier</button>
</form>



</div>
@endsection