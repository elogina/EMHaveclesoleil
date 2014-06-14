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
 /**
     * action liste: liste des produits
     * @param string $slug 
     * @return view: produit/liste
     */
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
    
    
    # attention va dans wamp -> php -> extention -> coche php curl
    
     /**
     * action detail: ldetail des produits
     * @param string $slug  îd
     * @return view: produit/detail
     */
     public function detailAction($id, $slug){

            $rProduits = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhEcommerceBundle:Produits')
                          ->findOneById($id);
            
             $rsSites = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('emhcmsPrincipalBundle:Sites')
                        ->findOneBySlug($slug);
     
     
   return $this->render('emhEcommerceBundle:Produits:detail.html.twig', 
                              array('produits' => $rProduits, 'sites'=>$rsSites,
                                    ));
}

       
    
   
  }