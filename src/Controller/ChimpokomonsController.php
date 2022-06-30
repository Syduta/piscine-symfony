<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChimpokomonsController extends AbstractController{

    /**
     * @Route("/chimpokomons", name="chimpokomons");
     */

    public function chimpokomons(){
        return new Response('vous les américains avez un énorme zizi');
    }
}