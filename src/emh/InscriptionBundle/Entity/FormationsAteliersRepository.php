<?php

namespace emh\InscriptionBundle\Entity;
use Doctrine\ORM\EntityRepository;




class FormationsAteliersRepository extends EntityRepository {
 
   
     public function findInscription($membres, $formation) {
        
        $query = $this->getEntityManager()->createQuery(
           
                'SELECT i
            FROM emhInscriptionBundle:Inscriptions i
            WHERE i.membres = :membres
            AND i.formationsAteliers = :formation
            '
                
               
            );
        $query->setParameter('membres', $membres, 'formation', $formation);
        return $query->getResult();
        
    }  
    
    
   
   
}
    