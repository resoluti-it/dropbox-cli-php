<?php

namespace App\Service;

use Dotenv\Dotenv;

class DotenvLoad
{
    public function __construct(Dotenv $dotenv)
    {
        $dotenv->load();
    }

    public function getAccessToken(): string
    {
        return $_ENV['ACCESS_TOKEN'];
    }
}
