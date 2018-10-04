<?php

namespace Sushi\SushiBufetBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository
{
    public function getEntityManager()
    {
        return parent::getEntityManager();
    }

    /**
     * @param mixed $entity
     * @return $this
     */
    public function remove($entity)
    {
        $this->getEntityManager()
            ->remove($entity);

        return $this;
    }

    /**
     * @param mixed $entity
     * @return $this
     */
    public function persist($entity)
    {
        $this->getEntityManager()
            ->persist($entity);

        return $this;
    }

    /**
     * @param mixed|null $entity
     * @return $this
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function flush($entity = null)
    {
        $this->getEntityManager()
            ->flush($entity);

        return $this;
    }
}
