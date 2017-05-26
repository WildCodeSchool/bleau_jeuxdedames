<?php

namespace CmsBundle\Repository;

/**
 * EquipeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EquipeRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     * Get all members from equipe
     */
    public function getAllEquipeMembers(){
        $qb = $this->createQueryBuilder('e');
        $qb->select('e.nom', 'e.prenom', 'e.role', 'e.show_tel as showTel', 'e.telephone', 'e.id')
            ->join('e.images', 'i')
            ->addSelect('i.url as imageUrl', 'i.alt as imageAlt')
            ->orderBy('e.nom', 'ASC');
        return $qb->getQuery()->getResult();
    }
}
