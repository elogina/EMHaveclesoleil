<?php

namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/
use emh\cmsPrincipalBundle\Entity\Articles;
use emh\cmsPrincipalBundle\Entity\Rubriques;
use emh\cmsPrincipalBundle\Form\ArticlesType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

/*----------------------
 * Le controller
 * ----------------------------------*/
class ArticleController extends Controller

{
    /**
     * action detail: détail de la rubrique
     * @param string $id
     * @return view: Rubriques/detail - rubrique
     */
    public function listeParRubriqueAction($rubID)
            
    {
        $rsArticles = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Articles')
                          ->findByRubriqueID($rubID);
        
        $rRubrique =  $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($rubID);
        return $this->render('emhcmsPrincipalBundle:Articles:liste.html.twig', 
                              array('article' => $rsArticles,
                                    'rubrique' =>$rRubrique));
    }
     public function detailAction($id, $idArticle)
            
    {
        $rArticle = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Articles')
                          ->findOneById($idArticle);
        
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($id);
        
        return $this->render('emhcmsPrincipalBundle:Articles:detail.html.twig', 
                              array('article' => $rArticle,
                                    'rubrique'=> $rRubrique));
        
        
                
    }
    public function addAction() {
       $add = "add";
       var_dump($add);
        $modelManager = $this->getDoctrine()
                              ->getManager();
        
        $rArticle = $modelManager ->getRepository('emhcmsPrincipalBundle:Articles');
        
        $form = $this->createForm(new ArticlesType());
         
        
       $requete = $this->getRequest();

       
        if ($requete->isMethod('POST')) {
         
            $rArticle= new ArticlesType();
           
            $form->bind($requete);
            $Articles= $form->getData();
            $modelManager->persist($Articles);
            $modelManager->flush();
             
           $Rubrique = $Articles->getRubriques();
            return $this->redirect($this->generateUrl('cms_principal_page', array('slug' => $Rubrique->getSlug())));
        }

        return $this->render('emhcmsPrincipalBundle:Articles:add.html.twig', 
                array('form' => $form->createView()));
    }
    
    /**
     * action edit: pour modifier l'article
     * string $id
     * @return view: Articles/edit - article
     */
    public function editAction($id) {
     
        $modelManager = $this->getDoctrine()
                             ->getManager();
       
        $rArticle = $modelManager ->getRepository('emhcmsPrincipalBundle:Articles')
                                   ->findOneById($id);
                           var_dump($rArticle);
        $form = $this->createForm(new ArticlesType(), $rArticle);
        $requete = $this->getRequest();
        
        if ($requete->isMethod('POST')) {
            
            $form->bind($requete);
            $Article= $form->getData();
           
            $modelManager->persist($Article);
            $modelManager->flush();
            $Rubrique = $Article->getRubriques();
            //return $this->redirect($this->generateUrl('cms_principal_page', array('slug' => $Rubrique->getSlug())));
    }   
   
              return $this->render('emhcmsPrincipalBundle:Articles:edit.html.twig', 
                              array('form' => $form->createView(),
                                    'article' =>$rArticle));
    }
}


