<?php

namespace App\Repository;

use App\Entity\Callback;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Callback>
 *
 * @method Callback|null find($id, $lockMode = null, $lockVersion = null)
 * @method Callback|null findOneBy(array $criteria, array $orderBy = null)
 * @method Callback[]    findAll()
 * @method Callback[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CallbackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Callback::class);
    }
}
