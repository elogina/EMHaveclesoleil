<?php

namespace emh\MembresBundle\Entity;
use Doctrine\ORM\EntityRepository;




class MembresRepository extends EntityRepository {

   public function findFormations($membresId) {
        
        $query = $this->getEntityManager()->createQuery(
            'SELECT u
            FROM emhMembresBundle:Membres u
            WHERE u.id = :membresId
            '
                
               
            );
        $query->setParameter('membresId', $membresId);
        return $query->getResult();
        
    }  
   
}
    