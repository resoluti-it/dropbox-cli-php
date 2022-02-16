<?php

namespace App;

use Garden\Cli\Cli;

class CommandLine
{

    private ?string $filepath;
    private string $folder;
    private array $argv;
    private ?string $filename;

    public function __construct(array $argv)
    {
        $this->argv = $argv;
    }

    public function start(): self
    {
        $cli = new Cli();

        $cli
            ->opt('folder:p', 'cria uma pasta no dropbox no upload ou no sistema operacional no download', true)
            ->opt('filepath:f', 'caminho do arquivo que será feito o upload')
            ->opt('filename:d', "passar a key do arquivo na pasta");

        $args = $cli->parse($this->argv, true);

        $this->filepath = $args['filepath'] ?? null;
        $this->folder = $args['folder'];
        $this->filename = $args['filename'] ?? null;

        return $this;
    }

    public function getFilename(): string
    {
        return $this->filename;
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
