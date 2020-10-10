<?php

namespace App\Repository;

use App\Entity\BonMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BonMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method BonMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method BonMedical[]    findAll()
 * @method BonMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BonMedical::class);
    }

    // /**
    //  * @return BonMedical[] Returns an array of BonMedical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BonMedical
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
