@extends("interfaceAdmin.index")
@section("contenu")
<section class="liste-admin">
    @foreach($produits as $produit)
    <article class="item-liste">
        <img src="{{asset('img/'.$produit->slug.'-appercu.jpg')}}" alt="brownies">
        <div>
            <h3>{{$produit->nom}}</h3>
            <p>Mauris nisi turpis, congue id faucibus eget, viverra eu nunc. Vestibulum eleifend augue ac neque feugiat, at tincidunt massa eleifend. Donec congue ornare dictum. Phasellus imperdiet commodo volutpat. Proin finibus tortor ac luctus vehicula. Ut augue dui, aliquam in pulvinar luctus, finibus at ex. Integer quis ipsum vel magna malesuada finibus quis in tortor. </p>
        </div>
        <div class="item-info3">
            <div class="item-icones">
                <a href="{{action('ProduitController@edit', $produit)}}"><i class="fas fa-pen"></i></a>
                <a href="{{action('ProduitController@destroy', $produit)}}" onclick="return confirm('Voulez-vous vraiment supprimer le produit?')"><i class="fas fa-times-circle"></i></a>
            </div>
            <p>{{$produit->prix}}$</p>
        </div>
    </article>
    @endforeach
</section>
@endsection