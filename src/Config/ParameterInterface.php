<?php

namespace Otter\SSHConfig\Config;

interface ParameterInterface {
    /**
     * Example:
     * $keyword = "ForwardAgent"
     * $arguments = "Yes"
     * @param [string] $keyword  [String Parameter Keyword as defined in ssh_config]
     * @param [type] $arguments [Case sensitive string of arguments for that keyword]
     */
    public function __construct($keyword, $arguments);

    /**
     * Return the keyword
     * @return [string] [Paramter Keyword]
     */
    public function getKeyword();

    /**
     * Return the arguments string
     * @return [string] [Parameter arguments]
     */
    public function getArguments();
}
