<?php

namespace MagedIn\CourseExample\Api\Data;

interface ExampleInterface
{
    
    const NAME     = 'name';
    const LASTNAME = 'lastname';
    const RANDOM   = 'random';
    
    /**
     * @return string
     */
    public function getName();
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);
    
    /**
     * @return string
     */
    public function getLastname();
    
    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname($lastname);
    
    /**
     * @return integer
     */
    public function getRandom();
    
    /**
     * @param integer $number
     *
     * @return $this
     */
    public function setRandom($number);
}
