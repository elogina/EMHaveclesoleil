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
        // Je crée le formulaire à partir de TYPE
        $form = $this->createForm(new ArticlesType());
        // on récupère le contenu de la requête 
        $requete = $this->getRequest();
        if ($requete->isMethod('POST')) {
            // On va devoir utiliser le manager
            $modelManager = $this->getDoctrine()->getManager();
            $rArticle = new Articles();
            //On ajoute les valeurs aux champs
            $form->bind($requete);
            $rArticle = $form->getData();
            //on stocke et on execute
            $modelManager->persist($rArticle);
            $modelManager->flush();
               
            // on redirige vers la liste des posts
            return $this->redirect($this->generateUrl('cms_principal_page', array('slug' => getSlug())));
        }
//        On charge la vue 
//        et on lui envoit la liste des Acteurs
        return $this->render('emhcmsPrincipalBundle:Articles:add.html.twig', 
                array('form' => $form->createView()));
    }
    
    /**
     * action edit: pour modifier l'article
     * string $id
     * @return view: Articles/edit - article
     */
    public function editAction($id) {
       
         $modelManager=$this->getDoctrine()->getManager();
         $rArticle = $modelManager->getRepository('emhcmsPrincipalBundle:Articles')
                          ->findOneById($id);
          $form = $this->createForm(new ArticlesType(),$rArticle);
        
         $request = $this->getRequest();
           
         if ($request->isMethod('POST')){
               $form->bind($request);
               $article = $form->getData();
            
            
            //on stock et on exécute
              $modelManager->persist($article);
              $modelManager->flush();
              
            //on redirige vers la page
              return $this->redirect($this->generateUrl('cms_principal_page', array('id' =>$article->getId()))
                     );
    }   
              return $this->render('emhcmsPrincipalBundle:Articles:edit.html.twig', 
                              array('form' => $form->createView(),
                                    'article' =>$rArticle));
    }
}


