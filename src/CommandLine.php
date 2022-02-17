<?php

namespace App;

use Garden\Cli\Cli;

class CommandLine
{
    private string $filepath;
    private string $folder;
    private array $argv;
    private bool $rename = false;
    private string $uniqueId;

    public function __construct(array $argv)
    {
        $this->argv = $argv;
    }

    public function start(): self
    {
        $cli = new Cli();

        $cli
            ->opt('folder:p', 'cria uma pasta no dropbox no upload ou no sistema operacional no download', true)
            ->opt('rename:r', 'renomeia o nome do arquivo')
            ->opt('uniqueid:u', 'passar unique id', true)
            ->opt('filepath:f', 'caminho do arquivo que será feito o upload', true);

        $args = $cli->parse($this->argv, true);

        $this->filepath = $args['filepath'];
        $this->folder = $args['folder'];
        $this->rename = $args->hasOpt('rename');
        $this->uniqueId = $args['uniqueid'] ?? '';

        return $this;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function getRename(): bool
    {
        return $this->rename;
    }

    public function getFilepath(): string
    {
        return $this->filepath;
    }

    public function getFolder(): string
    {
        return $this->folder;
    }
}
