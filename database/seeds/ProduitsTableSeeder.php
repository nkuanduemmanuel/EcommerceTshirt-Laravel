<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt happy";
        $produit->prix_ht = 40;
        $produit->description = "T-Shirt du film happy";
        $produit->photo_principale = "happy.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt hulk";
        $produit->prix_ht = 32;
        $produit->description = "T-Shirt du film hulk";
        $produit->photo_principale = "hulk.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt krusty_simpsons";
        $produit->prix_ht = 50;
        $produit->description = "T-Shirt du film krusty_simpsons";
        $produit->photo_principale = "krusty_simpsons.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt little_miss_sunshine";
        $produit->prix_ht = 16;
        $produit->description = "T-Shirt du film little_miss_sunshine";
        $produit->photo_principale = "little_miss_sunshine.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt simpsons";
        $produit->prix_ht = 16;
        $produit->description = "T-Shirt du film simpsons";
        $produit->photo_principale = "simpsons.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Star Trek";
        $produit->prix_ht = 39;
        $produit->description = "T-Shirt du film les Star Trek";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt super_man";
        $produit->prix_ht = 38;
        $produit->description = "T-Shirt du film super_man";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt wonder_woman";
        $produit->prix_ht = 27;
        $produit->description = "T-Shirt du film wonder_woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->save();

    }
}
