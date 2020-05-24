@extends("interfaceAdmin.index")
@section("contenu")
<section class="liste-admin">
                    <article class="item-liste">
                        <img src="img/brownie-appercu.jpg" alt="brownies">
                        <div>
                            <h3>Brownies aux 3 chocolats</h3>
                            <p>Mauris nisi turpis, congue id faucibus eget, viverra eu nunc. Vestibulum eleifend augue ac neque feugiat, at tincidunt massa eleifend. Donec congue ornare dictum. Phasellus imperdiet commodo volutpat. Proin finibus tortor ac luctus vehicula. Ut augue dui, aliquam in pulvinar luctus, finibus at ex. Integer quis ipsum vel magna malesuada finibus quis in tortor. </p>
                        </div>
                        <div class="item-info3">
                            <div class="item-icones">
                                <a href=""><i class="fas fa-pen"></i></a>
                                <a href=""><i class="fas fa-times-circle"></i></a>
                            </div>
                            <p>9,49$</p>
                        </div>
                    </article>
                    <article class="item-liste">
                        <img src="img/burger-appercu.jpg" alt="brownies">
                        <div>
                            <h3>Burger avec boulette de boeuf</h3>
                            <p>Mauris nisi turpis, congue id faucibus eget, viverra eu nunc. Vestibulum eleifend augue ac neque feugiat, at tincidunt massa eleifend. Donec congue ornare dictum. Phasellus imperdiet commodo volutpat. Proin finibus tortor ac luctus vehicula. Ut augue dui, aliquam in pulvinar luctus, finibus at ex. Integer quis ipsum vel magna malesuada finibus quis in tortor. </p>
                        </div>
                        <div class="item-info3">
                            <div class="item-icones">
                                <a href=""><i class="fas fa-pen"></i></a>
                                <a href=""><i class="fas fa-times-circle"></i></a>
                            </div>
                            <p>14,89$</p>
                        </div>
                    </article>
                </section>
                
                <div class="popup-overlay">
                    <section id="popup" class="popup-content">
                        <p>Voulez-vous vraiment supprimer le produit?</p>
                        <div>
                            <button type="submit" class="close">Annuler</button>
                            <button type="submit">Supprimer</button>
                        </div>
                    </section>
                </div>
@endsection