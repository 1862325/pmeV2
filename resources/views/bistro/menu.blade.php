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
            <article class="m-1">
                <img src="img/salade-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Salade du chef</h3>
                    <div class="description-menu">
                        <p>120 calories</p>
                        <p>4,29$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
            <article class="m-2">
                <img src="img/calmar-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Calmars frits</h3>
                    <div class="description-menu">
                        <p>450 calories</p>
                        <p>8,99$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="fiche.html">Consulter</a>
                </div>
            </article>
            <article class="m-3">
                <img src="img/burger-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Burger avec boulette de boeuf</h3>
                    <div class="description-menu">
                        <p>1350 calories</p>
                        <p>14,89$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
            <article class="m-4">
                <img src="img/burger2-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Burger végé</h3>
                    <div class="description-menu">
                        <p>1050 calories</p>
                        <p>16,39$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
            <article class="m-5">
                <img src="img/pennes-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Pennes à la sauce alfredo avec tomates</h3>
                    <div class="description-menu">
                        <p>875 calories</p>
                        <p>13,99$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
            <article class="m-6">
                <img src="img/brownie-menu.jpg" alt="">
                <div class="infos-menu">
                    <h3>Brownie aux 3 chocolats</h3>
                    <div class="description-menu">
                        <p>450 calories</p>
                        <p>9,49$</p>
                    </div>
                </div>
                <div class="btn-menu">
                    <a href="">Consulter</a>
                </div>
            </article>
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