<aside class="itemGridAside">
            <a href="{{action('ProduitController@accueil')}}"><img src="{{asset('svg/logo-blanc.svg')}}" alt="logo bistro la fourchette"></a>
            <h2>Vos options</h2>
            <nav class="nav-admin">
                <ul>
                    <a href=""><li>Afficher les commandes</li></a>
                    <a href="{{action('ProduitController@liste')}}"><li>Afficher tous les produits</li></a>
                    <a href="{{action('ProduitController@create')}}"><li>Ajouter un produit</li></a>
                </ul>
            </nav>
        </aside>