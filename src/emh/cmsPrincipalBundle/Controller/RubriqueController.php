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
     public function detailAction($slug)
            
    {
        
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneBySlug($slug);
    
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
    
        
        public function addAction() {
        // Je crée le formulaire à partir de TYPE
        $form = $this->createForm(new RubriquesType());
        // on récupère le contenu de la requête 
        $requete = $this->getRequest();
        if ($requete->isMethod('POST')) {
            // On va devoir utiliser le manager
            $modelManager = $this->getDoctrine()->getManager();
            $rRubrique = new Rubriques();
            //On ajoute les valeurs aux champs
            $form->bind($requete);
            $rRubrique = $form->getData();
            //on stocke et on execute
            $modelManager->persist($rRubrique);
            $modelManager->flush();
            
            // on redirige vers la liste des posts
            return $this->redirect($this->generateUrl('cms_principal_page', array('slug'=> $rRubrique->getSlug()
                                                         )));
        }
        
//        On charge la vue 
//        et on lui envoit la liste des Acteurs
        return $this->render('emhcmsPrincipalBundle:Rubriques:add.html.twig', 
                array('form' => $form->createView()));
    }
    
    /**
     * action edit: pour modifier la rubrique
     * string $slug
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
              return $this->redirect($this->generateUrl('ieps_cms_base_page', array('slug' =>$rubrique->getSlug()))
                     );
    }   
              return $this->render('emhcmsPrincipalBundle:Rubriques:edit.html.twig', 
                              array('form' => $form->createView(),
                                    'rubrique' =>$rRubrique));
    }
    
     public function deleteAction($id) {
        $modelManager = $this->getDoctrine()
                             ->getManager();
        $rRubrique = $modelManager->find('emhcmsPrincipalBundle:Rubriques', $id);
        
        if (!$rRubrique) {
            throw new NotFoundHttpException("enregistrement non trouvée");
        }
        $modelManager->remove($rRubrique);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('Ieps_cms_base_pages', array ('slug'=>getSlug())));
    }
        
    
}