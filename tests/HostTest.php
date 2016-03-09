<?php

use Otter\SSHConfig\Config\Host;

class HostTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->pattern = 'production';
        $this->subject = new Host($this->pattern, []);
    }

    public function testImplements()
    {
        $this->assertInstanceOf('Otter\SSHConfig\Config\SpecificationInterface', $this->subject);
    }
}
