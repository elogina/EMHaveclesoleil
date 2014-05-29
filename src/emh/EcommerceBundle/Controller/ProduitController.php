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
    public function listeAction($slug)
            
    {
        $rsProduits = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhEcommerceBundle:Produits')
                          ->findAll();
        
        $rsSites = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('emhcmsPrincipalBundle:Sites')
                        ->findOneBySlug($slug);
        
        
        return $this->render('emhEcommerceBundle:Produits:liste.html.twig', 
                              array('produits' => $rsProduits, 'sites'=>$rsSites,
                                    ));
    }
    
    /**
     * action detail: détail de la produit
     * @param string $id
     * @return view: Produits/detail - produit
     */
     public function detailAction($id, $slug)
            
    {
        
        $rProduit = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhEcommerceBundle:Produits')
                          ->findOneById($id);
        
         $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
    
        return $this->render('emhEcommerceBundle:Produits:detail.html.twig', 
                              array('produits' => $rProduit, 'sites'=>$rsSites,
                                  ));
         
    }
    
     
    
        
      
    
}