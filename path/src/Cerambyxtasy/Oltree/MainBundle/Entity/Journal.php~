<?php


namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Journal {
    protected $journal_entries;
    protected $satrap;

    public function __construct()
    {
        $this->journal_entries = new ArrayCollection();
    }
    /**
     * @var integer
     */
    protected $id;


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
     * Add journal_entries
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntries
     * @return Journal
     */
    public function addJournalEntrie(\Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntries)
    {
        $this->journal_entries[] = $journalEntries;
    
        return $this;
    }

    /**
     * Remove journal_entries
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntries
     */
    public function removeJournalEntrie(\Cerambyxtasy\Oltree\MainBundle\Entity\JournalEntry $journalEntries)
    {
        $this->journal_entries->removeElement($journalEntries);
    }

    /**
     * Get journal_entries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJournalEntries()
    {
        return $this->journal_entries;
    }
    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\User
     */
    protected $user;


    /**
     * Set satrap
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Satrap $satrap
     * @return Journal
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
    private $name;


    /**
     * Set name
     *
     * @param string $name
     * @return Journal
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
}