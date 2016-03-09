<?php

use Otter\SSHConfig\Config\Parameter;

class ParameterTest extends \PHPUnit_Framework_TestCase {
    public function setUp()
    {
        $this->keyword = "ForwardAgent";
        $this->arguments = "Yes";
        $this->subject = new Parameter($this->keyword, $this->arguments);
    }

    public function testImplements()
    {
        $this->assertInstanceOf('Otter\SSHConfig\Config\ParameterInterface', $this->subject);
    }
}
