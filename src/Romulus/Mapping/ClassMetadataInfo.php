<?php

namespace Klever\Romulus\Mapping;

use Doctrine\Instantiator\Instantiator;

class ClassMetadataInfo
{
    private $name;
    private $instantiator;

    public function __construct($name)
    {
        $this->name = $name;
        $this->instantiator = new Instantiator();
    }

    public function newInstance()
    {
        return $this->instantiator->instantiate($this->name);
    }
}
