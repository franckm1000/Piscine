<?php

namespace PiscineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontPiscineController extends Controller{
	
	/**
	 * Fonction permettant d'envoyer vers la vue une page statique du site
	 * @param string $lNom : Nom de la page (index, localtechnique, terrassement...)
	 * @return Response
	 */
    public function indexAction($lNom){
        return $this->render('PiscineBundle:FrontPiscine:index.html.twig', array('nom' => $lNom));
    }
}
