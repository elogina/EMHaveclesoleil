<?php

namespace emh\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\EcommerceBundle\Entity\Produits;
use emh\cmsPrincipalBundle\Entity\Sites;
use emh\MembresBundle\Entity\Membres;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\FormBuilderInterface;



class AchatController extends Controller
{
 
    public function addAction($id) {

       $currentUser = $this->getUser();
 
       $request = Request::createFromGlobals();
       $request = $this->getRequest($id);
       
         if (!$currentUser) {
                    return new response('Vous devez vous connecter');
         }
      

       $modelManager = $this->getDoctrine()
                             ->getManager();

       $rUser = $modelManager ->getRepository('emhMembresBundle:Membres')
                              ->findOneById($currentUser);
  
       $rProduit = $modelManager ->getRepository('emhEcommerceBundle:Produits')
                                 ->findOneById($id);
        
       $rAchat = $modelManager->getRepository('emhEcommerceBundle:Achats')
                              ->findByMembres($rUser->getId());
                           
        
       $achat = new \emh\EcommerceBundle\Entity\Achats(); 
       
       $achat->setMembres($rUser);
       $achat->setProduits($rProduit);                    
       $achat->setPaye(false);
       $achat->setDate(new \DateTime('now'));
    
       foreach($rAchat as $i){
             
           if($achat->getProduits()== $i->getProduits()){
               
               return new response('Vous êtes déjà Acheté(e) ce produit');
           }
       }
       
            $modelManager->persist($achat);
            $modelManager->flush();
    
            
        return new Response("Affichage dedu produit d'id : ".$id.".");
         
    }
    
   public function deleteAction($id) {
       
       $currentUser = $this->getUser();
     
       $request = Request::createFromGlobals();
       $request = $this->getRequest($id);
       
       $modelManager = $this->getDoctrine()
                             ->getManager();
       
       $rProduit = $modelManager->find('emhEcommerceBundle:ProduitsAteliers', $id);
       
       $achat = $modelManager ->getRepository('emhEcommerceBundle:Inscriptions')
                                    ->findInscription($currentUser, $rProduit);
       
          foreach($rInscription as $i){
             
           if($achat->getProduitsAteliers()== $i->getProduitsAteliers()){
               
               
           }
       }

       
        if (!$rProduit) {
            throw new NotFoundHttpException("Enregistrement non trouvée");
        }
       
        $modelManager->persist($currentUser);
        $modelManager->flush();
        return new Response("Vous êtes désinscrits : ".$id.".");
    }

       
         
    
         
  
}
