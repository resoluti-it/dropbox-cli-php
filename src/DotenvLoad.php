<?php

namespace App;

use Dotenv\Dotenv;

class DotenvLoad
{
    private string $accessToken;
    public function __construct(Dotenv $dotenv)
    {
        $dotenv->load();
        $this->accessToken = $_ENV['ACCESS_TOKEN'];
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
