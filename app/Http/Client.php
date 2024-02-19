<?php
namespace App\Http;

use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\BrowserKit\Response;

class Client extends AbstractBrowser
{
    protected function doRequest($request): object
    {
        // ... convert request into a response

        return $request;
    }
}
