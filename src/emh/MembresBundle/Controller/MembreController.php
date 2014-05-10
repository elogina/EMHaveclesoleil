<?php

namespace emh\MembresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use emh\InscriptionBundle\Entity\FormationsAteliers;
use emh\MembresBundle\Entity\Membres;

class MembreController extends Controller
{
   
      public function testAction() {
        $currentUser = $this->getUser();
        
        $listeusers = $this->getDoctrine()
                ->getRepository('emhMembresBundle:Membres')
                ->findFormations($currentUser);
       
        return $this->render('emhMembresBundle:Membres:index.html.twig', array(
                    'membres' => $listeusers,
        ));
    }

    public function addAction($id) {
        
        $currentUser = $this->getUser();
     
       $request = Request::createFromGlobals();
       $request = $this->getRequest($id);
       
       
 
        $modelManager = $this->getDoctrine()
                             ->getManager();
       
        $rUser = $modelManager ->getRepository('emhMembresBundle:Membres')
                                   ->findOneById($currentUser);
        $rFormation = $modelManager ->getRepository('emhInscriptionBundle:FormationsAteliers')
                                   ->findOneById($id);
        
        $test = $rUser->getFormationsAteliers();
        
                          
        if(in_array($rFormation, $test)  ){
       
            return new response('Vous êtes déjà inscrits à la formation');
        }
        
        else{
            
            $rUser->addFormationAteliers($rFormation);
            $modelManager->persist($rUser);
            $modelManager->flush();
        }
            
        return new Response("Affichage de l'article d'id : ".$id.".");
         
    }
    
    
    
    public function deleteAction($id) {
        $modelManager = $this->getDoctrine()
                             ->getManager();
        $rFormation = $modelManager->find('emhInscriptionBundle:FormationsAteliers', $id);
        
        if (!$rFormation) {
            throw new NotFoundHttpException("Enregistrement non trouvée");
        }
        $modelManager->remove($rFormation);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('emh_membres_profil'));
    }
    

}


