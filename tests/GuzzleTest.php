<?php
class SL_PHP_Guzzle_Guzzle_Test extends PHPUnit_Framework_TestCase
{
    public function testGuzzle()
    {
        if ($fetch_url = getenv('TEST_FATAL')) {
            throw new \Guzzle\Http\Exception\ClientErrorResponseException('testing manually thrown error');
        }
        $this->assertTrue(true);
    }
}
