<?php
//ici on devait créer un controller pokercontroller et refuser l'accès aux personnes n'ayant pas +de18ans
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController {
    /**
     * @Route("/poker", name="poker");
     */
    public function poker(Request $request){

        $age = $request->query->get('age');
        if($age>=18){
            return new Response('bienvenue sur le site de poker');
        }else{
            return $this->redirectToRoute("chimpokomons");//au lieu d'afficher une response on redirige
        }
    }

}

//CODE DAVID
//namespace App\Controller;
//
//
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class PokerController
//{
//
//    /**
//     * @Route("/poker", name="poker")
//     */
//    // Je passe en parametre de la methode poker, la classe
//    // Request suivie d'une variable $request
//    // en faisant ça, je demande à Symfony de me récupérer
//    // l'objet Request et de le stocker dans la variable
//    public function poker(Request $request)
//    {
//        // j'utilise l'objet Request et la propriété query
//        // pour récupérer le parametre GET d'âge
//        // je le stocke dans une variable
//        $age = $request->query->get('age');
//
//        // si l'âge est supérieur ou égal à 18, j'accepte l'utilisateur
//        if ($age >= 18) {
//            return new Response("Bienvenue sur le site de Poker");
//            // sinon je lui mets une message de refus
//        } else {
//            return new Response("Dégage morveux");
//        }
//
//    }
//
//}

