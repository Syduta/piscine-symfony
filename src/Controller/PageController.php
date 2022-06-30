<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//je crée une classe avec le même non que le fichier avec en suffixe Controller
class PageController{
    //je crée une route de l'une ou de l'autre manière pour spécifier l'url de la page que je veux créer.
    //la route est située au dessus de la méthode à appeler pour la page
//    #[Route('/home',name:'home')]
    /**
     * @Route("/", name="home");
     */
    public function home(){
        // je renvoie une réponse http grâce à l'objet response
        //(du composant http foundation de symfony)
        //ça affichera donc 'le test du début' quand la bonne url sera demandée
        return new Response('le test du début');
    }

    //pour cet exercice on devait créer une nouvelle page et afficher "contact"
//    #[Route('/contact',name:'contact')]
    /**
     * @Route("/contact", name="contact");
     */
    public function contact(){
        return new Response('contact');
    }
}