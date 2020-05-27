@extends("interfaceUser.index")
@section("contenu")
<section class="produits" id="nav-produits">
       <div class="p-intro">
            <h2>Consultez nos produits</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper, lacus sit amet imperdiet pulvinar, sem urna interdum odio, nec rutrum quam neque ac lacus.</p>
       </div>
       <div class="p-liste, carousel">
           <div class="carousel-item">
               <article class="p-1">
                   <img src="img/salade.jpg" alt="">
                   <h3>Salade du chef</h3>
               </article>
           </div>
           <div class="carousel-item">
               <article class="p-2">
                   <img src="img/pennes.jpg" alt="">
                   <h3>Pennes à la sauce alfredo avec tomates</h3>
               </article>
           </div>
           <div class="carousel-item">
               <article class="p-3">
                   <img src="img/burger.jpg" alt="">
                   <h3>Burger avec boulette de boeuf</h3>
               </article>
           </div>
       </div>
       <a href="{{action('BistroController@show')}}"><button type="button" class="btn-produits">Voir le menu</button></a>
   </section>
   <section class="heures fade-scroll" id="nav-heures">
        <h2>Les heures d'ouvertures</h2>
        <div>
            <p><span class="bold">Dimanche fermé</span></p> 
            <p><span class="bold">Lundi :</span> 11h30 - 22h00</p>
            <p><span class="bold">Mardi :</span> 11h30 - 22h00</p>
            <p><span class="bold">Mercredi :</span> 11h30 - 22h00</p>
            <p><span class="bold">Jeudi :</span> 11h30 - 22h00</p>
            <p><span class="bold">Vendredi :</span> 11h30 - 22h00</p>
            <p><span class="bold">Samedi :</span> 17h00 - 23h00</p>
        </div>
   </section>
   <section class="promotion fade-scroll">
        <div class="promo-infos">
            <h2>Promotion du mois</h2>
            <p>Choisissez parmi une de nos entrées <span class="bold">gratuitement</span> avec une commande de <span class="bold">35$ et plus</span></p>
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
   <section class="perimetre-livraison fade-scroll">
       <h2>Livraison à domicile</h2>
       <img src="svg/maps-and-location.svg" alt="">
       <p>Vérifiez si vous êtes dans le périmètre de 10 kilomètres pour la livraison</p>
       <input type="text" name="code-postal" placeholder="Votre code postal">
       <button type="button">Vérifier</button>
   </section>
   <section class="entreprise" id="nav-entreprise">
        <h2>À propos de bistro la fourchette</h2>
        <article>
            <img src="img/bistro.jpg" alt="">
            <div>
                <p>Vestibulum tempus posuere turpis, iaculis porttitor velit semper id. Donec laoreet turpis mauris, nec dapibus nibh imperdiet vitae. Aenean lacinia placerat diam. In lobortis molestie enim, eu porta lacus finibus eget. Morbi dictum lectus leo, vel finibus tortor venenatis et. Vivamus facilisis consequat elit. Maecenas diam libero, vehicula non risus sit amet, varius euismod neque. Nulla vitae diam hendrerit, faucibus orci in, placerat nunc. Duis scelerisque suscipit lorem vitae sollicitudin.</p>
                <p>Congue nibh sollicitudin at.  Suspendisse et commodo tortor, at varius sem. Sed molestie velit ut venenatis hendrerit. Vivamus porta mattis ante vestibulum cursus. Vivamus eu neque nisl. Phasellus id lacinia ligula nec dapibus tellus. Praesent ultrices, felis eu tristique dignissim, est sapien vulputate ipsum, itae placerat nulla risus nec est. Maecenas rhoncus lectus id nulla venenatis, ac tincidunt sem cursus. Nulla sit amet pellentesque nisl.</p>
            </div>
        </article>
   </section>
   @endsection