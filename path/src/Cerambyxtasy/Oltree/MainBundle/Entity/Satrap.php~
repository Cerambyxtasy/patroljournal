<?php

namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Satrap {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $json_configuration;

    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Journal
     */
    private $journals;

    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct() {    
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
     * Set name
     *
     * @param string $name
     * @return Satrap
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Satrap
     */
    public function setDetails($details) {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Set json_configuration
     *
     * @param string $jsonConfiguration
     * @return Satrap
     */
    public function setJsonConfiguration($jsonConfiguration) {
        $this->json_configuration = $jsonConfiguration;

        return $this;
    }

    /**
     * Get json_configuration
     *
     * @return string 
     */
    public function getJsonConfiguration() {
        return $this->json_configuration;
    }

    /**
     * Set user
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\User $user
     * @return Satrap
     */
    public function setUser(\Cerambyxtasy\Oltree\MainBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }   
    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\User
     */
    private $patroller;


    /**
     * Add journals
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journals
     * @return Satrap
     */
    public function addJournal(\Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journals)
    {
        $this->journals[] = $journals;
    
        return $this;
    }

    /**
     * Remove journals
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journals
     */
    public function removeJournal(\Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journals)
    {
        $this->journals->removeElement($journals);
    }

    /**
     * Get journals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJournals()
    {
        return $this->journals;
    }

    /**
     * Set patroller
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\User $patroller
     * @return Satrap
     */
    public function setPatroller(\Cerambyxtasy\Oltree\MainBundle\Entity\User $patroller = null)
    {
        $this->patroller = $patroller;
    
        return $this;
    }

    /**
     * Get patroller
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\User 
     */
    public function getPatroller()
    {
        return $this->patroller;
    }
    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Map
     */
    private $map;


    /**
     * Set map
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Map $map
     * @return Satrap
     */
    public function setMap(\Cerambyxtasy\Oltree\MainBundle\Entity\Map $map = null)
    {
        $this->map = $map;
    
        return $this;
    }

    /**
     * Get map
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Map 
     */
    public function getMap()
    {
        return $this->map;
    }
}