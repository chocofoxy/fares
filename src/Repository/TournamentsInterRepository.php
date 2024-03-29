<?php

namespace App\Repository;

use App\Entity\TournamentsInter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TournamentsInter|null find($id, $lockMode = null, $lockVersion = null)
 * @method TournamentsInter|null findOneBy(array $criteria, array $orderBy = null)
 * @method TournamentsInter[]    findAll()
 * @method TournamentsInter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TournamentsInterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentsInter::class);
    }

    // /**
    //  * @return TournamentsInter[] Returns an array of TournamentsInter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TournamentsInter
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
