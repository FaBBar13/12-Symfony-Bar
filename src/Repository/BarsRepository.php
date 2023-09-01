<?php

namespace App\Repository;

use App\Entity\Bars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bars>
 *
 * @method Bars|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bars|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bars[]    findAll()
 * @method Bars[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bars::class);
    }

//    /**
//     * @return Bars[] Returns an array of Bars objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bars
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
