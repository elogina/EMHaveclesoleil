<?php

namespace emh\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\EcommerceBundle\Entity\Produits;
use emh\EcommerceBundle\Form\ProduitsType;
use emh\EcommerceBundle\Form\ContactsType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class ProduitController extends Controller

{
    public function listeAction()
            
    {
        $rsProduits = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhEcommerceBundle:Produits')
                          ->findAll();
        
        
        return $this->render('emhEcommerceBundle:Produits:liste.html.twig', 
                              array('article' => $rsProduits
                                    ));
    }
    
    /**
     * action detail: détail de la produit
     * @param string $id
     * @return view: Produits/detail - produit
     */
     public function detailAction($id)
            
    {
        
        $rProduit = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhEcommerceBundle:Produits')
                          ->findOneById($id);
    
        return $this->render('emhEcommerceBundle:Produits:detail.html.twig', 
                              array('produit' => $rProduit
                                  ));
         
    }
    
     
    
        
        public function addAction() {
        // Je crée le formulaire à partir de TYPE
        $form = $this->createForm(new ProduitsType());
        // on récupère le contenu de la requête 
        $requete = $this->getRequest();
        if ($requete->isMethod('POST')) {
            // On va devoir utiliser le manager
            $modelManager = $this->getDoctrine()->getManager();
            $rProduit = new Produits();
            //On ajoute les valeurs aux champs
            $form->bind($requete);
            $rProduit = $form->getData();
            //on stocke et on execute
            $modelManager->persist($rProduit);
            $modelManager->flush();
            
            // on redirige vers la liste des posts
            return $this->redirect($this->generateUrl('cms_principal_page', array('id'=> $rProduit->getId()
                                                         )));
        }
        
//        On charge la vue 
//        et on lui envoit la liste des Acteurs
        return $this->render('emhEcommerceBundle:Produits:add.html.twig', 
                array('form' => $form->createView()));
    }
    
    /**
     * action edit: pour modifier la produit
     * string $id
     * @return view: Produits/edit - produit
     */
    public function editAction($id) {
       
         $modelManager=$this->getDoctrine()->getManager();
         $rProduit = $modelManager->getRepository('emhEcommerceBundle:Produits')
                          ->findOneById($id);
          $form = $this->createForm(new ProduitsType(),$rProduit);
        
         $request = $this->getRequest();
           
         if ($request->isMethod('POST')){
               $form->bind($request);
               $produit = $form->getData();
            
            //on stock et on exécute
              $modelManager->persist($produit);
              $modelManager->flush();
              
            //on redirige vers la page
              return $this->redirect($this->generateUrl('ieps_cms_base_page', array('id' =>$produit->getId()))
                     );
    }   
              return $this->render('emhEcommerceBundle:Produits:edit.html.twig', 
                              array('form' => $form->createView(),
                                    'produit' =>$rProduit));
    }
    
     public function deleteAction($id) {
        $modelManager = $this->getDoctrine()
                             ->getManager();
        $rProduit = $modelManager->find('emhEcommerceBundle:Produits', $id);
        
        if (!$rProduit) {
            throw new NotFoundHttpException("enregistrement non trouvée");
        }
        $modelManager->remove($rProduit);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('cms_principal_pages', array ('id'=>getId())));
    }
        
    
}