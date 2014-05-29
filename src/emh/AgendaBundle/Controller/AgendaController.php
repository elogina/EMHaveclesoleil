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
     * action detail: détail de la rubrique
     * @param string $id
     * @return view: Rubriques/detail - rubrique
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




