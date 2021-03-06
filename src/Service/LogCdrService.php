<?php

namespace App\Service;

use App\Service\CommandLine;
use App\Service\DropboxClient;
use App\Entity\LogCdr;

class LogCdrService
{
    private DropboxClient $dropboxClient;
    private DoctrineManager $doctrineManager;

    public function __construct()
    {
        $this->dropboxClient = new DropboxClient();
        $this->doctrineManager = new DoctrineManager();
    }

    public function sharedLink(CommandLine $cmd, string $path): string
    {
        $doctrine = $this->doctrineManager->getDoctrine();

        /** @var LogCdr */
        $logCdr = $doctrine->getRepository(LogCdr::class)->findOneBy(['uniqueid' => $cmd->getUniqueId()]);

        $url = $this->dropboxClient->setAccessToken($_ENV['ACCESS_TOKEN'])->generateSharedLink($path);

        $logCdr->setLinkMp3($url);

        $doctrine->flush();

        return $url;
    }
}
