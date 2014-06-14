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



class FormationController extends Controller
{
     /**
     * action liste: liste des formations
     * @param string $slug
     * @return view: formation/liste 
     */
    public function listeAction($slug)
    {
       
        $rsFormations = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhInscriptionBundle:FormationsAteliers')
                           ->findAll();
         
        $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
        
       
       
         return $this->render('emhInscriptionBundle:Formations:liste.html.twig', 
                array('formations' => $rsFormations, 'sites'=>$rsSites));
    }
     /**
     * action detail: detail des formations
     * @param string $slug $id
     * @return view: formation/detail 
     */
    public function detailAction($id, $slug) {
        $rFormation = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhInscriptionBundle:FormationsAteliers')
                           ->findOneById($id);
         $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
            
             return $this->render('emhInscriptionBundle:Formations:detail.html.twig', 
                array('formations' => $rFormation, 'sites'=>$rsSites));
    
    }
      
    
    
         
  
}
