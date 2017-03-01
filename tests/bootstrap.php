<?php

if ($fetch_url = getenv('BOOTSTRAP_FATAL')) {
    throw new \Guzzle\Http\Exception\ClientErrorResponseException('testing manually thrown error');
}
