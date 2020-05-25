@extends("interfaceUser.index")
@section("contenu")
<section class="fil-ariane">
        <p>Accueil</p>
        <p>></p>
        <p>Menu</p>
   </section>
   <section class="liste-produits" id="nav-produits">
        <h2>Notre menu</h2>
        <div class="liste-menu">
        @foreach($produits as $produit)
            <article class="m-1">
                <img src="img/{{$produit->slug}}-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>{{$produit->nom}}</h3>
                    <div class="description-menu">
                        <p>{{$produit->calories}} calories</p>
                        <p>{{$produit->prix}}$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
        @endforeach
        </div>
   </section>
   <section class="livraison fade-scroll" id="nav-livraison">
        <h2>Comment commander?</h2>
        <article class="etapes-livraison">
            <div class="e-1">
                <img src="svg/tap.svg" alt="">
                <p>Ajoutez à votre commande les items souhaités</p>
            </div>
            <div class="e-2">
                <img src="svg/shapes.svg" alt="">
                <p>Confirmez votre commande</p>
            </div>
            <div class="e-3">
                <img src="svg/files-and-folders.svg" alt="">
                <p>Un représentant vous contactera pour le paiement par téléphone ou interact</p>
            </div>
            <div class="e-4">
                <img src="svg/food-and-restaurant.svg" alt="">
                <p>Votre commande sera ensuite livrée</p>
            </div>
        </article>
   </section>
   <section class="perimetre-livraison">
       <h2>Livraison à domicile</h2>
       <img src="svg/maps-and-location.svg" alt="">
       <p>Vérifiez si vous êtes dans le périmètre de 10 kilomètres pour la livraison</p>
       <input type="text" name="code-postal" placeholder="Votre code postal">
       <button type="button">Vérifier</button>
   </section>
   @endsection