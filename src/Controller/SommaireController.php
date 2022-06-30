<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SommaireController{

    /**
     * @Route("/sommaire",name="sommaire");
     */

    public function sommaire(){
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];
        return new Response($articles);
    }
}