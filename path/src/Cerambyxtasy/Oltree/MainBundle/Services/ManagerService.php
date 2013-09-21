<?php

namespace Cerambyxtasy\Oltree\MainBundle\Services;

use Doctrine\ORM\EntityManager;

class ManagerService {

    public static $em;

    public function __construct(EntityManager $entityManager) {
        $this::$em = $entityManager;
    }

}

?>
