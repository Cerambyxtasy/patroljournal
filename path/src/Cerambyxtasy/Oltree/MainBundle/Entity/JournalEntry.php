<?php
namespace Cerambyxtasy\Oltree\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class JournalEntry {
    
  
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
    private $hexagon_json_infos;

    /**
     * @var string
     */
    private $terrain;

    /**
     * @var integer
     */
    private $exploration_level;

    /**
     * @var string
     */
    private $patrollers;

    /**
     * @var string
     */
    private $events;

    /**
     * @var dateTime
     */
    private $session_date;

    /**
     * @var dateTime
     */
    private $game_date;

    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Journal
     */
    private $journal;


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
     * @return JournalEntry
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
     * Set hexagon_json_infos
     *
     * @param string $hexagonJsonInfos
     * @return JournalEntry
     */
    public function setHexagonJsonInfos($hexagonJsonInfos)
    {
        $this->hexagon_json_infos = $hexagonJsonInfos;
    
        return $this;
    }

    /**
     * Get hexagon_json_infos
     *
     * @return string 
     */
    public function getHexagonJsonInfos()
    {
        return $this->hexagon_json_infos;
    }

    /**
     * Set terrain
     *
     * @param string $terrain
     * @return JournalEntry
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;
    
        return $this;
    }

    /**
     * Get terrain
     *
     * @return string 
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set exploration_level
     *
     * @param integer $explorationLevel
     * @return JournalEntry
     */
    public function setExplorationLevel($explorationLevel)
    {
        $this->exploration_level = $explorationLevel;
    
        return $this;
    }

    /**
     * Get exploration_level
     *
     * @return integer 
     */
    public function getExplorationLevel()
    {
        return $this->exploration_level;
    }

    /**
     * Set patrollers
     *
     * @param string $patrollers
     * @return JournalEntry
     */
    public function setPatrollers($patrollers)
    {
        $this->patrollers = $patrollers;
    
        return $this;
    }

    /**
     * Get patrollers
     *
     * @return string 
     */
    public function getPatrollers()
    {
        return $this->patrollers;
    }

    /**
     * Set events
     *
     * @param string $events
     * @return JournalEntry
     */
    public function setEvents($events)
    {
        $this->events = $events;
    
        return $this;
    }

    /**
     * Get events
     *
     * @return string 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set session_date
     *
     * @param \DateTime $sessionDate
     * @return JournalEntry
     */
    public function setSessionDate(\DateTime $sessionDate)
    {
        $this->session_date = $sessionDate;
    
        return $this;
    }

    /**
     * Get session_date
     *
     * @return \dateTime 
     */
    public function getSessionDate()
    {
        return $this->session_date;
    }

    /**
     * Set game_date
     *
     * @param \DateTime $gameDate
     * @return JournalEntry
     */
    public function setGameDate(\DateTime $gameDate)
    {
        $this->game_date = $gameDate;
    
        return $this;
    }

    /**
     * Get game_date
     *
     * @return \dateTime 
     */
    public function getGameDate()
    {
        return $this->game_date;
    }

    /**
     * Set journal
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journal
     * @return JournalEntry
     */
    public function setJournal(\Cerambyxtasy\Oltree\MainBundle\Entity\Journal $journal = null)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Journal 
     */
    public function getJournal()
    {
        return $this->journal;
    }


    /**
     * @var \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon
     */
    private $hexagon;


    /**
     * Set hexagon
     *
     * @param \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagon
     * @return JournalEntry
     */
    public function setHexagon(\Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon $hexagon = null)
    {
        $this->hexagon = $hexagon;
    
        return $this;
    }

    /**
     * Get hexagon
     *
     * @return \Cerambyxtasy\Oltree\MainBundle\Entity\Hexagon 
     */
    public function getHexagon()
    {
        return $this->hexagon;
    }
}