<?php

namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\cmsPrincipalBundle\Entity\Liens;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class LienController extends Controller

{
    /**
     * action liste: détail des liens
     * @param string $id
     * @return view: Liens/liste
     */
    public function listeAction($rubID,$slug)
            
    {
        $rsLiens = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Liens')
                          ->findOneById($rubID);
        
        $rRubrique =  $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($rubID);
        
        $rsSites = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('emhcmsPrincipalBundle:Sites')
                        ->findOneBySlug($slug);
        
        return $this->render('emhcmsPrincipalBundle:Liens:liste.html.twig', 
                              array('lien' => $rsLiens,
                                    'rubrique' =>$rRubrique, 
                                    'sites'=>$rsSites
                                    ));
    }
}  