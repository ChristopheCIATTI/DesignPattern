<?php

namespace DesignPattern\BehavioralPatterns\Mediator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteColleagueA extends AbstractColleague
{
    /**
     * 
     * @param unknown $message
     * @return unknown
     */
    public function request($message)
    {
        return $message;
    }
    
    /**
     * 
     * @return string
     */
    public function getClass()
    {
        return __CLASS__;
    }
  
}
