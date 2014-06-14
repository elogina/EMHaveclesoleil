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

      
    public function addAction($id, $slug) {

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
                           
        $rsSites = $modelManager->getRepository('emhcmsPrincipalBundle:Sites')
                                ->findOneBySlug($slug);
        
        $listeAchat= $modelManager->getRepository('emhMembresBundle:Membres')
                                  ->findAchats($currentUser);
        $rInscription = $modelManager->getRepository('emhInscriptionBundle:Inscriptions')
                                     ->findByMembres($currentUser->getId());
        
        $rAchat = $modelManager->getRepository('emhEcommerceBundle:Achats')
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
    
             $rInscription = $modelManager->getRepository('emhInscriptionBundle:Inscriptions')
                                     ->findByMembres($rUser->getId());
        return $this->render('emhMembresBundle:Membres:index.html.twig', array( 'formation'=> $rFormation, 
                                                                                 'user' =>$rUser,
                                                                                 'inscription' =>$rInscription,
                                                                                 'sites'=>$rsSites,  
                                                                                 'membres'=>$listeAchat,
                                                                                 'inscriptions'=>$rInscription,
                                                                                 'achats'=>$rAchat,
                                                                                    
                                                                        ));   
         
    }
    
     public function paypalAction($id, $slug){
                                    
          $rsFormations = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('emhInscriptionBundle:FormationsAteliers')
                           ->findOneById($id);
           $rsSites =  $this->getDoctrine()
                          ->getRepository('emhcmsPrincipalBundle:Sites')
                          ->findOneBySlug($slug);
                 
        
     $paypal ="#";
     $user ='a-mag13-facilitator_api1.hotmail.com' ;
     $pwd ='1401448888' ;
     $signature ='AKlo4ceVFLUC2h8HnJeDoizpd2mQAYtG3cckEN1qwVj3SiFvLAfpqcbb' ;
     $returnUrl = 'http://localhost/EMHaveclesoleil/web/app_dev.php/'.$slug.'/formation/confirmation/do/'.$id;
     $params = array(
         'METHOD' =>'SetExpressCheckout',
         'VERSION' =>'113.0',
         'USER' =>$user,
         'SIGNATURE'=>$signature,
         'PWD'=>$pwd,
         'RETURNURL'=>$returnUrl,
         'CANCELURL'=>'http://localhost/EMHaveclesoeil/web',
         'PAYMENTREQUEST_0_AMT' => $rsFormations->getPrix(),                    
         'PAYMENTREQUEST_0_CURRENCYCODE' =>'EUR',
         
       
     ); 
     
      foreach ($rsFormations as $k => $product){
         $params ["L_PAYMENTREQUEST_0_NAME$k"] = $product[$rsFormations->getNomFr()];
         $params ["L_PAYMENTREQUEST_0_DESC$k"]=  $product[$rsFormations->getDescriptionFr()];
         
     }
     
    $params = http_build_query($params);
    
    $endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
    $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>$endpoint,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>$params,
        CURLOPT_RETURNTRANSFER =>1,
        CURLOPT_SSL_VERIFYPEER =>false,
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_VERBOSE => 1,
        
    ));
    
    $response = curl_exec($curl);
    $responseArray =array();
    
    parse_str($response, $responseArray);
   
    if(curl_errno($curl)){
        curl_close($curl);
       
    }
    else{
        if($responseArray['ACK'] == 'Success'){
            
        }
        else{
           
        }
         curl_close($curl);
    }
   
  
     $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token='.$responseArray['TOKEN'];
  
          return $this->render('emhInscriptionBundle:Formations:confirmation.html.twig', array(
                                                                                   'formation' =>  $rsFormations, 
                                                                                   'paypal' =>$paypal,
                                                                                   'site'=>$rsSites
                                                                                    
                                                                        ));              
         
    }
  
  public function processAction($slug, $id) {
      
       $rsFormations = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('emhInscriptionBundle:FormationsAteliers')
                            ->findOneById($id);
      
       $rsSites =  $this->getDoctrine()
                         ->getManager()
                         ->getRepository('emhcmsPrincipalBundle:Sites')
                         ->findBySlug($slug);
        
      var_dump('je suis dans la process');
     $paypal ="#";
     $user ='a-mag13-facilitator_api1.hotmail.com' ;
     $pwd ='1401448888' ;
     $signature ='AKlo4ceVFLUC2h8HnJeDoizpd2mQAYtG3cckEN1qwVj3SiFvLAfpqcbb' ;
     
     $params = array(
         'METHOD' =>'GetExpressCheckoutDetails',
         'VERSION' =>'113.0',
         'TOKEN'=> $_GET['token'],
         'USER' =>$user,
         'SIGNATURE'=>$signature,
         'PWD'=>$pwd,
         );
     
    $params = http_build_query($params);
    
    $endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
    $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>$endpoint,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>$params,
        CURLOPT_RETURNTRANSFER =>1,
        CURLOPT_SSL_VERIFYPEER =>false,
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_VERBOSE => 1,
        
    ));
    
    $response = curl_exec($curl);
  
        
    $responseArray =array();
    parse_str($response, $responseArray);
   
    if(curl_errno($curl)){
        curl_close($curl);
        die();  
    }
    else{
        if($responseArray['CHECKOUTSTATUS'] == 'PaymentActionCompleted'){
            die('Ce paiement a déjà été validé');
        }
        if($responseArray['ACK'] == 'Success'){
            
        }
        else{
            die();
        }
         curl_close($curl);
    }
     
     
    $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $responseArray['TOKEN'];    
    
    var_dump($response);
    $params = array(
         'METHOD' =>'DoExpressCheckoutPayment',
         'VERSION' =>'113.0',
         'TOKEN'=> $_GET['token'],
         'PAYERID'=>$_GET['PayerID'],
         'USER' =>$user,
         'SIGNATURE'=>$signature,
         'PWD'=>$pwd,
         'PAYMENTREQUEST_0_AMT' => $responseArray['PAYMENTREQUEST_0_AMT'],
         'PAYMENTREQUEST_0_CURRENCYCODE' =>'EUR',
         'PAYMENTACTION' => 'Sale',
         );
       
    $params = http_build_query($params);
    
    $endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
    $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>$endpoint,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>$params,
        CURLOPT_RETURNTRANSFER =>1,
        CURLOPT_SSL_VERIFYPEER =>false,
        CURLOPT_SSL_VERIFYHOST=>false,
        CURLOPT_VERBOSE => 1,
        
    ));
    
    $response = curl_exec($curl);
  
        
    $responseArray =array();
    parse_str($response, $responseArray);
    var_dump($responseArray);
  
    if(curl_errno($curl)){
        curl_close($curl);
        die();  
    }
    else{
        if($responseArray['PAYMENTINFO_0_PAYMENTSTATUS'] == 'PaymentActionCompleted'){
            die('Ce paiement a déjà été validé');
        }
        if($responseArray['ACK'] == 'Success'){
            
        }
        else{
            die();
        }
         curl_close($curl);
    }
  
   return $this->render('emhEcommerceBundle:Produits:doConfirmation.html.twig',
                array('paypal' => $paypal,
                      'sites'=>$rsSites,
                      'formation' =>$rsFormations ));
        
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
