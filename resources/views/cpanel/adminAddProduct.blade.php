<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter produit</title>
</head>
<body>
<form action="{{ __('/addProdByAdmin') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="libProd" name="prodLib">
    <br>
    <br>
    <select name="prodCat" id="">
        <option value="">Quelle catégorie ?</option>
        <option value="B6">Catégorie - B6</option>
        <option value="B12">Catégorie - B12</option>
    </select>
    <br>
    <br>
    <input type="file" name="prodImg">
    <br>
    <br>
    <select name="marqId" id="">
        <option value="">Choisissez une marque</option>
        @foreach($marques as $marque)
            <option value="{{ $marque->marqId }}">{{ $marque->marqLib }}</option>
        @endforeach
    </select>
    <br>
    <br>
    <input type="submit" value="Valider">
</form>
</body>
</html>
