@extends("interfaceUser.index")
@section("contenu")
<section class="fil-ariane">
        <p>Accueil</p>
        <p>></p>
        <p>Menu</p>
        <p>></p>
        <p>Calmars frits</p>
   </section>
   <section class="fiche-produit">
        <article class="fiche-description">
            <img src="img/calmar-fiche.jpg" alt="">
            <div class="fiche-infos">
                <h2>Calmarts frits</h2>
                <p>Morbi et ipsum eu leo fringilla venenatis. Vivamus cursus leo vel metus vestibulum, ut malesuada libero blandit. Aenean mollis commodo ullamcorper.</p>
                <div class="calo-prix">
                    <p>450 calories</p>
                    <p>8,99$</p>
                </div>
                <div class="ajout">
                    <select id="nombre">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button type="button">Ajouter à la commande</button>
                </div>
            </div>
        </article>    
        <article class="fiche-recommendations">
            <h3>Les plus populaires</h3>
            <div>
                <img src="img/pennes-appercu.jpg" alt="Pennes alfredo">
                <img src="img/burger-appercu.jpg" alt="burger boeuf">
                <img src="img/brownie-appercu.jpg" alt="brownies">
            </div>
        </article>
   </section>
   <section class="livraison fade-scroll" id="nav-livraison">
        <h2>Comment commander?</h2>
        <article class="etapes-livraison">
            <div class="e-1">
                <img src="svg/tap.svg" alt="tap svg">
                <p>Ajoutez à votre commande les items souhaités</p>
            </div>
            <div class="e-2">
                <img src="svg/shapes.svg" alt="confirmer svg">
                <p>Confirmez votre commande</p>
            </div>
            <div class="e-3">
                <img src="svg/files-and-folders.svg" alt="documents svg">
                <p>Un représentant vous contactera pour le paiement par téléphone ou interact</p>
            </div>
            <div class="e-4">
                <img src="svg/food-and-restaurant.svg" alt="hamburger svg">
                <p>Votre commande sera ensuite livrée</p>
            </div>
        </article>
   </section>
   <section class="perimetre-livraison">
       <h2>Livraison à domicile</h2>
       <img src="svg/maps-and-location.svg" alt="location svg">
       <p>Vérifiez si vous êtes dans le périmètre de 10 kilomètres pour la livraison</p>
       <input type="text" name="code-postal" placeholder="Votre code postal">
       <button type="button">Vérifier</button>
   </section>
   <footer>
        <section class="f-infos">
            <img src="svg/logo-regulier.svg" alt="Bistro la fourchette logo">
            <div>
                <p>(450) 667-7886</p>
                <p>1731 Rue Le Royer Laval QC</p>
                <p>H7M 2R6</p>
            </div>
            <div>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </section>
        <section class="f-form">
            <h3>Nous contactez</h3>
            <input type="text" name="Nom" placeholder="Votre nom">
            <input type="text" name="adresse" placeholder="Votre adresse courriel">
            <input type="text" name="message" placeholder="Tapez votre message">
            <button type="button">Envoyer</button>
        </section>
@endsection