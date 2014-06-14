<?php

namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\cmsPrincipalBundle\Entity\Config;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class ConfigController extends Controller

{
    /**
     * action liste: détail des liens
     * @param string $slug
     * @return view: config/liste
     */
    public function listeAction($slug)
            
    {
        $rsConfig = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Config')
                          ->findByAll();
        
        $rsSites = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('emhcmsPrincipalBundle:Sites')
                        ->findOneBySlug($slug);
        
        return $this->render('emhcmsPrincipalBundle:Config:liste.html.twig', 
                              array('config' => $rsConfig, 'sites'=>$rsSites
                                    ));
    }
    
  
}  

