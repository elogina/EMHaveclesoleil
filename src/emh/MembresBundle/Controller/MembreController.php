<?php

namespace emh\MembresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MembreController extends Controller
{
    /**
     * action test: affichage des formations liés au membres
     * @param string $slug
     * @return view: membre/index 
     */
      public function testAction($slug) {
          
      
        $currentUser = $this->getUser();
         
       
        $listeusers = $this->getDoctrine()->getManager()
                
                            ->getRepository('emhMembresBundle:Membres')
                            ->findFormations($currentUser);
   
        $rInscription = $this->getDoctrine()->getManager()
                             ->getRepository('emhInscriptionBundle:Inscriptions')
                             ->findByMembres($currentUser->getId());
       
        $listeAchat= $this->getDoctrine()->getManager()
                            ->getRepository('emhMembresBundle:Membres')
                            ->findAchats($currentUser);
        
        $rAchat= $this->getDoctrine()->getManager()
                      ->getRepository('emhEcommerceBundle:Achats')
                      ->findByMembres($currentUser->getId());
        
         $rsSites =  $this->getDoctrine()->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Sites')
                          ->findOneBySlug($slug);
        
        return $this->render('emhMembresBundle:Membres:index.html.twig', array(
                    'membres' => $listeusers, 
                    'inscriptions'=>$rInscription, 
                    'sites'=>$rsSites, 
                    'membres' =>$listeAchat,
                    'achats' =>$rAchat,
        ));
    }

}