<?php

namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser implements UserInterface, \Serializable {

    /**
     * @var integer
     */
    protected $id;

    public function __construct() {
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    public function getRoles() {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        list (
                $this->id,
                ) = unserialize($serialized);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $satraps;

    /**
     * Add satraps
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satraps
     * @return User
     */
    public function addSatrap(\Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satraps) {
        $this->satraps[] = $satraps;

        return $this;
    }

    /**
     * Remove satraps
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satraps
     */
    public function removeSatrap(\Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satraps) {
        $this->satraps->removeElement($satraps);
    }

    /**
     * Get satraps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSatraps() {
        return $this->satraps;
    }

}