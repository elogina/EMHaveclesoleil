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
     * action listeparRubrique: article par rubrique
     * @param string $id
     * @return view: article/liste 
     */
    public function listeParRubriqueAction($rubID, $slug)
            
    {
        $rsArticles = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Articles')
                          ->findByRubriques($rubID);
        
         $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
      
        return $this->render('emhcmsPrincipalBundle:Articles:liste.html.twig', 
                              array('article' => $rsArticles,'sites'=>$rsSites,
                                    ));
    }
    /**
     * action detail: détail de la rubrique
     * @param string $id, $slugFr,$slug
     * @return view: article/detail 
     */
     public function detailAction($id, $slugFr,$slug)
            
    {
        $rArticle = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Articles')
                          ->findOneBySlugFr($slugFr);
        
        $rRubrique = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($id);
        
         $rsSites = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findOneBySlug($slug);
        
        return $this->render('emhcmsPrincipalBundle:Articles:detail.html.twig', 
                              array('article' => $rArticle,
                                    'rubrique'=> $rRubrique,
                                  'sites'=>$rsSites));
        
        
    }

       
}


