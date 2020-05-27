<section class="top-nav">
        <a href=""><p>EN</p></a>
        <a href=""><p>FR</p></a>
        <a href=""><i class="fas fa-user"></i></a>
        <a href=""><i class="fas fa-shopping-basket"></i></a>
    </section>
   <header>
       <div class="nav-wrapper">
           <a href="{{action('BistroController@index')}}"><img src="{{asset('svg/logo-blanc.svg')}}" alt=""></a>
           <nav class="transparent, nav-principale">
               <ul>
                   <a href="{{action('BistroController@index')}}#nav-produits" id="btn-produits"><li>Produits</li></a>
                   <a href="{{action('BistroController@index')}}#nav-heures" id="btn-heures"><li>Heures d'ouvertures</li></a>
                   <a href="{{action('BistroController@index')}}l#nav-promotion" id="btn-promotion"><li>Promotion</li></a>
                   <a href="{{action('BistroController@index')}}#nav-livraison" id="btn-livraison"><li>Livraison</li></a>
                   <a href="{{action('BistroController@index')}}#nav-entreprise" id="btn-entreprise"><li>L'entreprise</li></a>
                   <a href="{{action('BistroController@index')}}#nav-contact" id="btn-contact"><li>Contact</li></a>
                </ul>
            </nav>
        </div>
   </header>