<?php

namespace App;

use App\Service\CommandLine;
use App\Service\DotenvLoad;
use App\Service\FileUploader;
use App\Service\LogCdrService;
use Dotenv\Dotenv;

class Run
{
    private string $currentPath;
    private Dotenv $dotenv;
    private DotenvLoad $envLoad;
    private CommandLine $cli;

    public function __construct(string $currentPath, array $argv)
    {
        $this->currentPath = $currentPath;
        $this->cli = new CommandLine($argv);
        $this->dotenv = Dotenv::createImmutable($this->currentPath);
        $this->envLoad = new DotenvLoad($this->dotenv);
    }

    public function deleteOriginalFile(): bool
    {
        try {
            if (!$this->cli->getDeleteFile()) {
                return false;
            }

            unlink($this->cli->getFilepath());

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function dropboxReponse()
    {
        $this->cli->start();

        $fileUploader = new FileUploader($this->envLoad, $this->cli, $this->currentPath);

        $infos = $fileUploader->upload();

        $path = $infos['path_display'];

        $logCdrService = new LogCdrService();

        $url = $logCdrService->sharedLink($this->cli, $path);

        $infos['file_url'] = $url;

        $this->deleteOriginalFile();

        return $infos;
    }
}
