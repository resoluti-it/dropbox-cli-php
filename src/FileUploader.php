<?php

namespace App;

use App\CommandLine;
use App\Utils;

class FileUploader
{
    private CommandLine $cmd;
    public function __construct(CommandLine $cmd)
    {
        $this->cmd = $cmd;
    }

    public function upload()
    {
        $key = Utils::randomKey();

        
    }
}
