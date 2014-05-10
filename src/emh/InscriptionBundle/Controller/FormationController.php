<?php

namespace emh\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\InscriptionBundle\Entity\FormationsAteliers;
use emh\InscriptionBundle\Form\FormationsAteliersType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;


class FormationController extends Controller
{
    public function listeAction()
    {
       
        $rsFormations = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhInscriptionBundle:FormationsAteliers')
                           ->findAll();
        return $this->render('emhInscriptionBundle:Formations:liste.html.twig', 
                array('formations' => $rsFormations));
    }
    
    public function detailAction($id) {
        $rFormation = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhInscriptionBundle:FormationsAteliers')
                           ->findOneById($id);
       
            
             return $this->render('emhInscriptionBundle:Formations:detail.html.twig', 
                array('formations' => $rFormation));
    
    }
       public function addAction() {
        $modelManager = $this->getDoctrine()
                              ->getManager();
        
        $rsFormations = $modelManager ->getRepository('emhInscriptionBundle:FormationsAteliers');
        $form = $this->createForm(new FormationsAteliersType());
         
        
       $requete = $this->getRequest();

       
        if ($requete->isMethod('POST')) {
         
            $rsFormations= new FormationsAteliersType();
           
            $form->bind($requete);
            $Formations= $form->getData();
            $modelManager->persist($Formations);
            $modelManager->flush();
         
           return $this->redirect($this->generateUrl('emh_formation'));
        }

        return $this->render('emhInscriptionBundle:Formations:add.html.twig', 
                array('form' => $form->createView()));
    } 
    
    public function editAction($id) {
       
        $modelManager = $this->getDoctrine()
                             ->getManager();
       
        $rFormation = $modelManager ->getRepository('emhInscriptionBundle:FormationsAteliers')
                                   ->findOneById($id);
        
        $form = $this->createForm(new FormationsAteliersType(), $rFormation);
        $requete = $this->getRequest();
         
        if ($requete->isMethod('POST')) {
            $form->bind($requete);
            $Formation= $form->getData();

            $modelManager->persist($Formation);
            $modelManager->flush();
            
            return $this->redirect($this->generateUrl('emh_formation'));
         }
        return $this->render('emhInscriptionBundle:Formations:editer.html.twig', array(
                    'form' => $form->createView(),
                     'formations' =>  $rFormation));
         
    }
     public function supprimerAction($id) {
        $modelManager = $this->getDoctrine()
                             ->getManager();
        $rFormation = $modelManager->find('emhInscriptionBundle:FormationsAteliers', $id);
        
        if (!$rFormation) {
            throw new NotFoundHttpException("Enregistrement non trouvée");
        }
        $modelManager->remove($rFormation);
        $modelManager->flush();
         return $this->redirect($this->generateUrl('emh_formation'));
    }
}
