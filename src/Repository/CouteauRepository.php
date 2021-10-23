<?php

namespace App\Repository;

use App\Entity\Couteau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Couteau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Couteau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Couteau[]    findAll()
 * @method Couteau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouteauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Couteau::class);
    }

    // /**
    //  * @return Couteau[] Returns an array of Couteau objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Couteau
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
