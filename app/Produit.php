<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    static public function fake() {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->id = $f->randomNumber(2);
        $resultat->nom = $f->realText(30);
        $resultat->slug = $f->realText(30);
        $resultat->description = $f->realText(300);
        $resultat->calories = $f->randomNumber(4);
        $resultat->prix = $f->randomNumber(4);
        return $resultat;
    }
}
