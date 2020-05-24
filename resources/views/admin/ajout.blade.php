@extends("interfaceAdmin.index")
@section("contenu")
<article class="form-ajout">
                    <form action="" method="get">
                        <label for="image">Image du produit:</label><br><br>
                        <input type="file" id="image" name="fiimage"><br><br>
                        <label for="nomproduit">Nom du produit:</label>
                        <input type="text" id="nomproduit" name="nomproduit"><br><br>
                        <label for="description">Description du produit:</label>
                        <textarea name="description" id="description" class="materialize-textarea"></textarea><br><br>
                        <label for="prix">Prix du produit:</label>
                        <input type="text" id="prix" name="prix"><br><br>
                        <label for="calories">Nombre de calories:</label>
                        <input type="text" id="calories" name="calories"><br><br>
                        <input type="submit" value="Ajouter">
                      </form>
                </article>
                @endsection