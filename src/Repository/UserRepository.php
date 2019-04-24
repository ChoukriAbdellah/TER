<?php
namespace App\Repository;
 
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
/**
 * @method User[]    findAll() 
 * @method User find($id)
 */

class UserRepository extends EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }
   
    public function sumUsers()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select count(id) as number from user ';
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);
        $tab = $stmt->fetch();
        $nb = $tab['number'];
    
        // returns an array of arrays (i.e. a raw data set)
        return $nb;
    }
  
    
  
<<<<<<< HEAD
}
=======
}
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
