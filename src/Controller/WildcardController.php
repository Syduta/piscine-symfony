<?php

namespace App\Controller; //alias de chemin pour récupérer les classes
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WildcardController{

/**
 * @Route("/wcard/{id}",name="wcard");
 */

public function wcard($id){
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
    $article=$articles[$id];//on cible la clef correspondant à l'id
    return new Response($article['title']);

}

}


//namespace App\Controller;
//// src/Controller
//
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class ArticleController
//{
//
//    /**
//     * @Route("/article", name="article_show")
//     */
//    public function showArticle(Request $request)
//    {
//
//        // fake requête SQL "SELECT * FROM article";
//        $articles = [
//            1 => [
//                'title' => 'La canicule, il fait chaud',
//                'content' => 'je transpire'
//            ],
//            2 => [
//                'title' => 'Fin des moteurs thermiques en 2035',
//                'content' => 'BROUM'
//            ],
//            3 => [
//                'title' => "L'alcool c'est pas cool",
//                'content' => "Pourquoi y'a cool dans alcool ?"
//            ]
//        ];
//
//        // récupérer l'id dans l'url (parametre GET)
//        $id = $request->query->get('id');
//
////        $ids = $request->query->get('id');
////        $titles = "";
////        foreach ($ids as $id) {
////            $titles .= " | " . $articles[$id]['title'];
////        }
////        return new Response($titles);
//
//        // trouver dans la liste des articles l'article qui correspond à l'id récupéré
//        $article = $articles[$id];
//
//        // afficher son titre en réponse
//        return new Response($article['title']);
//    }
//
//    // pour débuguer ses routes en utilisant la ligne de commandes :
//    // se placer dans le projet en ligne de commandes
//    //  et taper "php bin/console debug:router"
//
//    /**
//     * @Route("/article/{id}", name="article_show_wildcard")
//     * si je veux avoir une url plus "propre" je peux utiliser, au lieu d'un query parameter id,
//     * une wildcard dans l'url
//     * pour ça je créé mon url en précisant que l'id est variable en le passant entre accolades
//     */
//    // je demande à Symfony de récupérer la valeur de l'id en passant en parametre de la méthode
//    // une variable qui a le même nom que la wildcard
//    public function showArticleWildcard($id)
//    {
//
//        // fake requête SQL "SELECT * FROM article";
//        $articles = [
//            1 => [
//                'title' => 'La canicule, il fait chaud',
//                'content' => 'je transpire'
//            ],
//            2 => [
//                'title' => 'Fin des moteurs thermiques en 2035',
//                'content' => 'BROUM'
//            ],
//            3 => [
//                'title' => "L'alcool c'est pas cool ?!",
//                'content' => "Pourquoi y'a cool dans alcool ?"
//            ]
//        ];
//
//        // trouver dans la liste des articles l'article qui correspond à l'id récupéré
//        $article = $articles[$id];
//
//        // afficher son titre en réponse
//        return new Response($article['title']);
//
//    }
//
//}
