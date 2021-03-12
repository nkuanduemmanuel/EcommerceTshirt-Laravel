<?php
/**
 * Created by PhpStorm.
 * User: nkuan
 * Date: 2/11/2021
 * Time: 10:03 AM
 */

namespace App\Http\Controllers\Shop;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MainController extends Controller

{
    public function index(){
        // SELECT
        $produits = Produit::all();
        //dd($produits);

        return view('pages.shop.index',compact('produits'));
    }
}
