<?php

namespace Otter\SSHConfig\Config;

interface SpecificationInterface {
    /**
     * Create a Specification with the pattern for matching the host
     * and an Array of
     * @param [string] $pattern    [Pattern for matching a host]
     * @param Parameter[] $parameters [Array of Parameter objects]
     */
    public function __construct($pattern, array $parameters);

    public function getKeyword();

    public function getPattern();

    public function getParameters();
}
