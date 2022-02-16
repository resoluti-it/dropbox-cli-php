<?php

require "vendor/autoload.php";

use App\CommandLine;
use App\DotenvLoad;
use App\FileUploader;
use Dotenv\Dotenv;

test('testarUploadDeArquivo', function () {
    $currentPath = realpath(__DIR__."/../");

    $arr = [
        "./run",
        "--filepath={$currentPath}/composer.json",
        "--folder=test",
        "--rename"
    ];

    $dotenv = Dotenv::createImmutable($currentPath);

    $cli = new CommandLine($arr);
    $envLoad = new DotenvLoad($dotenv);

    $cli->start();

    $fileUploader = new FileUploader($envLoad, $cli, $currentPath);

    $infos = $fileUploader->upload();

    echo json_encode($infos);

    $fileUploader->removeFile($infos['path_display']);

    expect(true)->toBeTrue();
});
