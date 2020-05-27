@extends("interfaceAdmin.index")
@section("contenu")
<article class="infos-commandes">
                    <p class="chiffre">4</p>
                    <p>Nouvelles commandes</p>
                    <button type="button">Afficher les </br> commandes</button>
                </article>
                <article class="infos-produits">
                    <p class="chiffre">{{$count}}</p>
                    <p>Produits</p>
                    <div>
                        <a href="{{action('ProduitController@liste')}}"><button type="button">Gérer les </br> produits</button></a>
                        <a href="{{action('ProduitController@create')}}"><button type="button">Ajouter un </br> nouveau produits</button></a>
                    </div>
                </article>
@endsection