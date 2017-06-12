<?php

/**
 * Class CurlTest
 */
class CurlTest extends \Codeception\Test\Unit
{
    // ################################################### Class methods ###############################################

    /**
     * No sense test
     */
    public function testInit()
    {
        $curl = new alkurn\curl\Curl();
        expect($curl instanceof alkurn\curl\Curl)->equals(true);
    }
}

