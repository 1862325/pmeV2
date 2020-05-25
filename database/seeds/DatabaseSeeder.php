<?php

use Illuminate\Database\Seeder;
use App\Produit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $salade = new Produit(); 
        $salade->nom="Salade du Chef"; 
        $salade->slug="salade"; 
        $salade->description="Cras imperdiet nunc sed gravida interdum. Aenean arcu arcu, volutpat nec vestibulum sed, molestie ut neque. Aenean aliquet auctor gravida. Morbi at mattis orci. Aliquam vel interdum lacus, sed consectetur mauris. Maecenas quis eros varius, luctus turpis pulvinar, cursus tortor."; 
        $salade->calories="120"; 
        $salade->prix="4,29"; 
        $salade->save();

        $calmar = new Produit(); 
        $calmar->nom="Calmars frits"; 
        $calmar->slug="calmar"; 
        $calmar->description="Praesent accumsan leo neque. Nullam leo urna, consectetur id lacus mollis, consequat ullamcorper lacus. Aliquam at blandit metus, vel eleifend lacus. Pellentesque interdum, metus sed condimentum fermentum, justo nisi imperdiet metus, nec tempor erat nisl non mi"; 
        $calmar->calories="450"; 
        $calmar->prix="8,99"; 
        $calmar->save();

        $burger = new Produit(); 
        $burger->nom="Burger avec boulette de boeuf"; 
        $burger->slug="burger"; 
        $burger->description="Sed id ex eleifend, lobortis nisi nec, rhoncus lorem. Praesent id purus vel felis commodo scelerisque id sit amet purus. Mauris nec quam ac mi iaculis posuere in id tellus. Aliquam nec sapien dui. Duis non lectus quis eros sodales iaculis eget a odio. Mauris ultricies vestibulum ultrices."; 
        $burger->calories="1350"; 
        $burger->prix="16,39"; 
        $burger->save();

        $burgerv = new Produit(); 
        $burgerv->nom="Burger Végétarien"; 
        $burgerv->slug="burger2"; 
        $burgerv->description="Sed id ex eleifend, lobortis nisi nec, rhoncus lorem. Praesent id purus vel felis commodo scelerisque id sit amet purus. Mauris nec quam ac mi iaculis posuere in id tellus. Aliquam nec sapien dui. Duis non lectus quis eros sodales iaculis eget a odio. Mauris ultricies vestibulum ultrices."; 
        $burgerv->calories="1050"; 
        $burgerv->prix="14,39"; 
        $burgerv->save();

        $pennes = new Produit(); 
        $pennes->nom="Pennes à la sauce alfredo avec tomates"; 
        $pennes->slug="pennes"; 
        $pennes->description="Proin suscipit a lectus et luctus. Proin enim ipsum, sagittis ac fringilla in, vestibulum sed urna. Aliquam nec enim at ante ullamcorper porta vitae sit amet massa. Integer eget tellus justo. Mauris turpis magna, scelerisque quis ullamcorper eu, aliquam sit amet tellus. Pellentesque a placerat libero."; 
        $pennes->calories="875"; 
        $pennes->prix="13,99"; 
        $pennes->save();

        $brownie = new Produit(); 
        $brownie->nom="Brownie aux 3 chocolats"; 
        $brownie->slug="brownie"; 
        $brownie->description="Quisque ullamcorper malesuada lectus, et auctor ex venenatis ut. Donec vulputate ullamcorper massa, ullamcorper vehicula nulla. Integer pellentesque nisl sapien, et egestas est accumsan sit amet. Pellentesque lobortis erat eget semper fringilla. Nulla dapibus eros in leo congue, ac dictum libero ullamcorper."; 
        $brownie->calories="450"; 
        $brownie->prix="9,49"; 
        $brownie->save();
        
    }
}
