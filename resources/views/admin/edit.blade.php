@extends("interfaceAdmin.index")
@section("contenu")
<article class="form-ajout">
                    <form action="" method="get">
                        <label for="image">Image du produit:</label><br><br>
                        <input type="file" id="image" name="fiimage"><br><br>
                        <label for="nomproduit">Nom du produit:</label>
                        <input type="text" id="nomproduit" name="nomproduit" value="Salade du chef"><br><br>
                        <label for="description">Description du produit:</label>
                        <textarea name="description" id="description" class="materialize-textarea">Donec molestie, lectus nec vestibulum vehicula, risus erat interdum elit, sed aliquam ex orci ut augue. Suspendisse potenti. Vivamus ut luctus neque, eu faucibus neque. Quisque vitae odio accumsan, efficitur eros vitae, sollicitudin purus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</textarea><br><br>
                        <label for="prix">Prix du produit:</label>
                        <input type="text" id="prix" name="prix" value="4,29"><br><br>
                        <label for="calories">Nombre de calories:</label>
                        <input type="text" id="calories" name="calories" value="120"><br><br>
                        <input type="submit" value="Modifier">
                      </form>
                </article>
                @endsection