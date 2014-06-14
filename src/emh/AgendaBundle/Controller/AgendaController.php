<?php

namespace emh\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\AgendaBundle\Entity\Agendas;


use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class AgendaController extends Controller

{
    /**
     * action liste: liste de l'agenda
     * @param string 
     * @return view: agenda/liste 
     */
    public function listeAction()
            
    {
        $rAgenda = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhAgendaBundle:Agendas')
                          ->findAll();
        
  
        return $this->render('emhAgendaBundle:Agendas:liste.html.twig', 
                              array('agendas' => $rAgenda,
                                   ));
    }
    
     /**
     * action detail: detail de l'agenda
     * @param string $id $slug $slugFr
     * @return view: agenda/detail 
     */
     public function detailAction($id, $slugFr,$slug)
            
    {
        $rArticle = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhAgendaBundle:Articles')
                          ->findOneBySlugFr($slugFr);
        
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($id);
        
        $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
        
        return $this->render('emhAgendaBundle:Articles:detail.html.twig', 
                              array('article' => $rArticle,
                                    'rubrique'=> $rRubrique, 
                                    'sites'=>$rsSites));
        
        
    }


       
}




