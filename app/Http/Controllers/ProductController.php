<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    *  Home page (elenco prodotti)  
    */
    public function index() {
        $data = config('pasta');

        $lunghe = [];
        $corte = [];
        $cortissime = [];

        foreach($data as $key => $pasta) {

            $pasta["position"] = $key;

            if ($pasta["tipo"] == "lunga") {
                $lunghe[] = $pasta;
            } elseif ($pasta["tipo"] == "corta") {
                $corte[] = $pasta;
            } elseif ($pasta["tipo"] == "cortissima") {
                $cortissime[] = $pasta;
            }

        }
        // dd($lunghe, $corte, $cortissime);


        return view('home', compact('lunghe', 'corte', 'cortissime'));

    }    

    /*
    *  Dettaglio prodotto
    */
    public function show($id = 11) {
        $data = config('pasta');
        // dump($id);
        // dd($id);
        /* 
            $prev = $id - 1;
            $next = $id + 1;

            if($id == 0) {
                $prev = count($data) - 1;
            } elseif($id == count($data) - 1) {
                $next = 0;
            }
            dd($data);
            dump($data[$id]);
        */
        return view('product', [
            'product' => $data[$id],
            'id' => $id,
            'max' => count($data) - 1
            // 'prev' => $prev,
            // 'next' => $next 
        ]);
    }
}
