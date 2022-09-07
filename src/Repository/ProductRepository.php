<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Requete qui me permet de recuperer les produits en fonction de la recherche de l'utilisateur
     * @return Product[] 
     */
    public function findWithSearch($search)
    {
        $query = $this->createQueryBuilder('p')
        ->select('c', 'p')
        ->join('p.category', 'c');

        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('c.id IN (:categories)')
                ->setParameter('categories', $search->categories);
        }

        return $query->getQuery()->getResult();
    }

    public function findWithSearchVAC($search) 
    {
        $query = $this->createQueryBuilder('p')
        ->select('c', 'p')
        ->join('p.categoriesVAC', 'c');

        // dd($query);

        if (!empty($search->categoriesVAC)) {
            $query = $query
                ->andWhere('c.id IN (:categoriesVAC)')
                ->setParameter('categoriesVAC', $search->categoriesVAC);
        }

        return $query->getQuery()->getResult();
    }

    /**
    * @return Product[] Returns an array of Product objects
    */
    
    public function findByCategorie($value)
    {
        $query = $this->createQueryBuilder('p')
        ->select('c', 'p')
        ->join('p.category', 'c');

        if ($value) {
            $query = $query
                ->andWhere('c.id IN (:categories)')
                ->setParameter('categories', $value);
        }

        return $query->getQuery()->getResult();
    //     return $this->createQueryBuilder('p')
    //         ->andWhere('p.category = :category')
    //         ->setParameter('category', $value)
    //         ->orderBy('p.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    }

    public function findByIsBest($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.isBest = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
        ;
    }
    

    public function findByCategoryCategoryVAC($category, $categoriesVAC)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :val')
            ->andWhere('p.categoriesVAC = :val2')
            ->setParameter('val', $category)
            ->setParameter('val2', $categoriesVAC)
            // ->orderBy('p.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;

    //     $product = $productR





    //     $query = $this->createQueryBuilder('p')
    //     ->select('c', 'p')
    //     ->join('p.category', 'c');

    //     if ($category) {
    //         $query = $query
    //             ->andWhere('p.category IN (:categories)')
    //             ->setParameter('categories', $category);
    //     }

    //     return $query->getQuery()->getResult();
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Product $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Product $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
