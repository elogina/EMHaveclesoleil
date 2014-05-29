<?php

namespace emh\MembresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MembreController extends Controller
{
   
      public function testAction($slug) {
          
          
        $currentUser = $this->getUser();
        
        $listeusers = $this->getDoctrine()
                            ->getRepository('emhMembresBundle:Membres')
                            ->findFormations($currentUser);
        
        $modelManager = $this->getDoctrine()
                             ->getManager();
        
        $rInscription = $modelManager->getRepository('emhInscriptionBundle:Inscriptions')
                                     ->findByMembres($currentUser->getId());
        
         $rsSites =  $modelManager->getRepository('emhcmsPrincipalBundle:Sites')
                                  ->findOneBySlug($slug);
       
        return $this->render('emhMembresBundle:Membres:index.html.twig', array(
                    'membres' => $listeusers, 'inscriptions'=>$rInscription, 'sites'=>$rsSites
        ));
    }

}