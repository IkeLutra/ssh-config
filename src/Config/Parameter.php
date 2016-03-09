<?php

namespace Otter\SSHConfig\Config;

class Parameter implements ParameterInterface {

    private $keyword;
    private $arguments;

    public function __construct($keyword, $arguments)
    {
        $this->keyword = $keyword;
        $this->arguments = $arguments;
    }

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}
