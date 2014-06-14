<?php
namespace emh\cmsPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*---------------------
 * Chargement des classes nécessaires
 * -----------------------------*/


use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormBuilderInterface;

class ContactController extends Controller{
    
     /**
     * action index: index de la rubrique
     * @param string $rubId
     * @return view: cms_principal_page
     */

public function indexAction($rubID,$name){
    $message =\Swift_Message::newInstance()
            ->setSubject('Avec le soleil')
            ->setFrom('elodieleonard87@gmail.com')
            ->setTo('elodieleonard87@gmail.com')
            ->setBody($this->renderView('emhcmsPrincipalBundle:contact:email.html.twig', array('name =>$name')))
            ;
            $this->get('mailer')->send($message);
            
             $rRubrique =  $this->getDoctrine()
                          ->getManager()
                          ->getRepository('emhcmsPrincipalBundle:Rubriques')
                          ->findOneById($rubID);
            
            return $this->redirect($this->generateUrl('cms_principal_page', 
                                              array ('slugFr'=>getSlugFr(),
                                                     'rubrique' =>$rRubrique)));
    }

}
