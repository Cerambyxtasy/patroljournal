<?php


namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Hexagon {
  
    public function __construct()
    {
  
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
     * @var string
     */
    private $extended_id;

    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Map
     */
    private $map;


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
     * @return Hexagon
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
     * Set extended_id
     *
     * @param string $extendedId
     * @return Hexagon
     */
    public function setExtendedId($extendedId)
    {
        $this->extended_id = $extendedId;
    
        return $this;
    }

    /**
     * Get extended_id
     *
     * @return string 
     */
    public function getExtendedId()
    {
        return $this->extended_id;
    }

    /**
     * Set map
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Map $map
     * @return Hexagon
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
    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry
     */
    private $journal_entry;
    
    /**
     * Get map_id of the current map
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Map 
     */
    public function getMapId()
    {
         return $this->map->getId();
    }

    
    
    /**
     * Set journal_entry
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntry
     * @return Hexagon
     */
    public function setJournalEntry(\Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntry = null)
    {
        $this->journal_entry = $journalEntry;
    
        return $this;
    }

    /**
     * Get journal_entry
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry 
     */
    public function getJournalEntry()
    {
        return $this->journal_entry;
    }
    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon
     */
    private $extended;


    /**
     * Set extended
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $extended
     * @return Hexagon
     */
    public function setExtended(\Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $extended = null)
    {
        $this->extended = $extended;
    
        return $this;
    }

    /**
     * Get extended
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon 
     */
    public function getExtended()
    {
        return $this->extended;
    }
}