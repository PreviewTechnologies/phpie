<?php

class TestTests extends PHPUnit_Framework_TestCase
{
    public function testSample()
    {
        $test = new \Previewtechs\Phpie\i18n\Test();
        $this->assertTrue(1 == $test->init());
    }
}