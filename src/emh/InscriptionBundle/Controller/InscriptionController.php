<?php

namespace emh\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\InscriptionBundle\Entity\FormationsAteliers;
use emh\cmsPrincipalBundle\Entity\Sites;
use emh\MembresBundle\Entity\Membres;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\FormBuilderInterface;



class InscriptionController extends Controller
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
        
      
        
       $rFormation = $modelManager ->getRepository('emhInscriptionBundle:FormationsAteliers')
                                   ->findOneById($id);
        
       $rInscription = $modelManager->getRepository('emhInscriptionBundle:Inscriptions')
                                     ->findByMembres($rUser->getId());
                           
        
       $inscription = new \emh\InscriptionBundle\Entity\Inscriptions(); 
       
       $inscription->setMembres($rUser);
       $inscription->setFormationsAteliers($rFormation);                    
       $inscription->setPaye(false);
       $inscription->setDateinscription(new \DateTime('now'));
    
       foreach($rInscription as $i){
             
           if($inscription->getFormationsAteliers()== $i->getFormationsAteliers()){
               
               return new response('Vous êtes déjà inscrits à la formation');
           }
       }
       
            $modelManager->persist($inscription);
            $modelManager->flush();
    
            
        return new Response("Affichage de l'article d'id : ".$id.".");
         
    }
    
   public function deleteAction($id) {
       
       $currentUser = $this->getUser();
     
       $request = Request::createFromGlobals();
       $request = $this->getRequest($id);
       
       $modelManager = $this->getDoctrine()
                             ->getManager();
       
       $rFormation = $modelManager->find('emhInscriptionBundle:FormationsAteliers', $id);
       
       $inscription = $modelManager ->getRepository('emhInscriptionBundle:Inscriptions')
                                    ->findInscription($currentUser, $rFormation);
       
          foreach($rInscription as $i){
             
           if($inscription->getFormationsAteliers()== $i->getFormationsAteliers()){
               
               
           }
       }

       
        if (!$rFormation) {
            throw new NotFoundHttpException("Enregistrement non trouvée");
        }
       
        $modelManager->persist($currentUser);
        $modelManager->flush();
        return new Response("Vous êtes désinscrits : ".$id.".");
    }

       
         
    
         
  
}
