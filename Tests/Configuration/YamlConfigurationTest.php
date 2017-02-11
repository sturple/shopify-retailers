<?php

namespace Fgms\RetailersBundle\Tests\Configuration;

class YamlConfigurationTest extends \PHPUnit_Framework_TestCase
{
    private $config;

    protected function setUp()
    {
        $this->config = new \Fgms\RetailersBundle\Configuration\YamlConfiguration();
    }

    public function testLoadInvalid()
    {
        $this->expectException(\Symfony\Component\Yaml\Exception\ParseException::class);
        $this->config->load('foo: {');
    }

    public function testLoadNonObject()
    {
        $this->expectException(\Fgms\Yaml\Exception\TypeMismatchException::class);
        $this->config->load('foo');
    }
}
