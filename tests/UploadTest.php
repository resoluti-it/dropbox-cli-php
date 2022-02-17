<?php

require "vendor/autoload.php";

use App\Service\CommandLine;
use App\Service\DotenvLoad;
use App\Service\FileUploader;
use Dotenv\Dotenv;

test('testarUploadDeArquivo', function () {
    $currentPath = realpath(__DIR__."/../");

    $arr = [
        "./run",
        "--filepath={$currentPath}/composer.json",
        "--folder=test",
        "--uniqueid=asdahsduasudha",
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
