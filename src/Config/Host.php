<?php

namespace Otter\SSHConfig\Config;

class Host implements SpecificationInterface
{
    private $keyword = "Host";

    public function __construct($pattern, array $arguments)
    {

    }

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function getPattern()
    {

    }

    public function getParameters()
    {

    }
}
