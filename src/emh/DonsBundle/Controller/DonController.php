<?php

namespace emh\DonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\DonsBundle\Entity\Dons;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class DonController extends Controller

{
    
    
        public function addMembresAction($id) {

       $currentUser = $this->getUser();
 
       $request = Request::createFromGlobals();
       $request = $this->getRequest($id);
       
         if (!$currentUser) {
                    return new response('Vous devez vous connecter');
         }
      

        $modelManager = $this->getDoctrine()
                             ->getManager();
  
       
        $rUser = $modelManager ->getRepository('emhMembresBundle:Membres')
                                   ->findOneById($currentUser);
        
      
        
        $rDons = $modelManager ->getRepository('emhDonsBundle:Dons')
                                   ->findOneById($id);
   
            $rDons->setMembres($rUser);
            $modelManager->persist();
            $modelManager->flush();
        
            
        return new Response("Affichage de l'article d'id : ".$id.".");
         
    }
}  