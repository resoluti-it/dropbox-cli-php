<?php

namespace App;

use Spatie\Dropbox\Client;

class DropboxClient
{
    private string $accessToken;

    public function getDropbox(): Client
    {
        $client = new Client($this->getAccessToken());

        return $client;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAcesssToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function upload(string $path): array
    {
        $result = $this->getDropbox()->upload($path, file_get_contents($path));

        return $result;
    }
}
