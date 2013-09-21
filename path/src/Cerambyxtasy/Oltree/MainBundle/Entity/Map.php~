<?php


namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Map {
  
    protected $hexagons;
    
    public function __construct()
    {
          $this->hexagons = new ArrayCollection();
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap
     */
    private $satrap;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Map
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add hexagons
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagons
     * @return Map
     */
    public function addHexagon(\Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagons)
    {
        $this->hexagons[] = $hexagons;
    
        return $this;
    }

    /**
     * Remove hexagons
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagons
     */
    public function removeHexagon(\Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagons)
    {
        $this->hexagons->removeElement($hexagons);
    }

    /**
     * Get hexagons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHexagons()
    {
        return $this->hexagons;
    }

    /**
     * Set satrap
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satrap
     * @return Map
     */
    public function setSatrap(\Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satrap = null)
    {
        $this->satrap = $satrap;
    
        return $this;
    }

    /**
     * Get satrap
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap 
     */
    public function getSatrap()
    {
        return $this->satrap;
    }
    /**
     * @var string
     */
    private $map_image_name;


    /**
     * Set map_image_name
     *
     * @param string $mapImageName
     * @return Map
     */
    public function setMapImageName($mapImageName)
    {
        $this->map_image_name = $mapImageName;
    
        return $this;
    }

    /**
     * Get map_image_name
     *
     * @return string 
     */
    public function getMapImageName()
    {
        return $this->map_image_name;
    }
}