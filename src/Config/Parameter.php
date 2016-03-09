<?php

namespace Otter\SSHConfig\Config;

class Parameter implements ParameterInterface {

    private $keyword;

    public function __construct($keyword, $arguments)
    {
        $this->keyword = $keyword;
    }

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function getArguments()
    {

    }
}
