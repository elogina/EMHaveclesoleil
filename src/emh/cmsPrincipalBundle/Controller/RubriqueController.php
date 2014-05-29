<?php

namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/

use emh\cmsPrincipalBundle\Entity\Rubriques;
use emh\cmsPrincipalBundle\Entity\Sites;
use emh\cmsPrincipalBundle\Form\RubriquesType;
use emh\AgendaBundle\Entity\Agendas;
use emh\cmsPrincipalBundle\Form\ContactsType;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class RubriqueController extends Controller

{
    
     public function ChapeauAction(){
          $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                           ->findAll();
              $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findAll();
           
          return $this->render('emhcmsPrincipalBundle:Pages:index.html.twig', array(
                                     'sites'=>$rsSites,'rubriques'=>$rRubrique
                                  ));
    
     }
    /**
     * action detail: détail de la rubrique
     * @param string $id
     * @return view: Rubriques/detail - rubrique
     */
     public function detailAction($slugFr, $slug)
            
    {
        
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneBySlugFr($slugFr);
        
         $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
            
        return $this->render('emhcmsPrincipalBundle:Rubriques:detail.html.twig', 
                              array('rubrique' => $rRubrique,
                                     'sites'=>$rsSites,
                                  ));
         
    }
    
     /**
     * action menu: liste des rubriques pour le menu
     * @return view: Rubriques/menu - rubrique
     */
    public function menuAction($slug)
            
    {
        $rsRubriques = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findAll();
         
        $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
        
        return $this->render('emhcmsPrincipalBundle:Rubriques:menu.html.twig', 
                              array('rubriques' => $rsRubriques, 'sites'=>$rsSites));
    }
    
        
   
}