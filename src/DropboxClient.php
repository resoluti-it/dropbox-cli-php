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

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }


    public function generateSharedLink(string $path, array $sttg = []): string
    {
        $info = $this->getDropbox()->createSharedLinkWithSettings($path, $sttg);

        return $info['url'];
    }
}
