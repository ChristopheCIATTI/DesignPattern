<?php

/*
 * This the client class,
 * This class is not part of the singleton pattern.
 * This is just a class to run and test the singleton class.
 * 
 *  Here I create and display two instance of the singleton class
 */

namespace DesignPattern\CreationalPatterns\Singleton;

/**
 * 
 * @author Christophe
 *
 */
class ClientSingleton extends Singleton
{
    /**
     * Here I create two variable who call the same method getInstance in Singleton class.
     * And I display the value with var_dump()
     * 
     * The result is the same number instance and the same object is displayed
     */
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Singleton\Singleton $SingletonA
         */
        $singletonA = Singleton::getInstance();
        $this->showInstance($singletonA);
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Singleton\Singleton $SingletonB
         */
        $singletonB = Singleton::getInstance();
        $this->showInstance($singletonB);
        
        
    }
    
    /**
     * 
     * @param unknown $singleton
     */
    private function showInstance($singleton)
    {
        echo "<pre>";
        echo "Instance" . "<br/>";
        var_dump($singleton);
        echo "</pre>";
    }
}