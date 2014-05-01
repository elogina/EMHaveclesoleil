<?php

namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\cmsPrincipalBundle\Entity\Rubriques;
use emh\cmsPrincipalBundle\Form\RubriquesType;
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
    /**
     * action detail: détail de la rubrique
     * @param string $id
     * @return view: Rubriques/detail - rubrique
     */
    public function detailAction($id)
            
    {
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($id);
        
        return $this->render('emhcmsPrincipalBundle:Rubriques:detail.html.twig', 
                              array('rubrique' => $rRubrique
                                  ));
         
    }
    
     /**
     * action menu: liste des rubriques pour le menu
     * @return view: Rubriques/menu - rubrique
     */
    public function menuAction()
            
    {
        $rsRubriques = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findAll();
        return $this->render('emhcmsPrincipalBundle:Rubriques:menu.html.twig', 
                              array('rubriques' => $rsRubriques));
    }
    
    
    /**
     * action edit: pour modifier la rubrique
     * string $id
     * @return view: Rubriques/edit - rubrique
     */
    public function editAction($id) {
       
         $modelManager=$this->getDoctrine()->getManager();
         $rRubrique = $modelManager->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($id);
          $form = $this->createForm(new RubriquesType(),$rRubrique);
        
         $request = $this->getRequest();
           
         if ($request->isMethod('POST')){
               $form->bind($request);
               $rubrique = $form->getData();
         
            
            //on stock et on exécute
              $modelManager->persist($rubrique);
              $modelManager->flush();
              
            //on redirige vers la page
              return $this->redirect($this->generateUrl('ieps_cms_base_page', array('id' =>$rubrique->getId()))
                     );
    }   
              return $this->render('emhcmsPrincipalBundle:Rubriques:edit.html.twig', 
                              array('form' => $form->createView(),
                                    'rubrique' =>$rRubrique));
    }
        
    
}
