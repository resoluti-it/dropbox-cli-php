<?php

require __DIR__ . "/../vendor/autoload.php";

use App\Service\CommandLine;
use App\Service\DotenvLoad;
use App\Service\FileUploader;
use Dotenv\Dotenv;
use App\Service\OauthGenerator;

$currentPath = realpath(__DIR__ . "/../");

test('testGenerateAccessToken', function () use ($currentPath) {
    $dotenv = Dotenv::createImmutable($currentPath);

    $dotenv->load();

    $oauth = new OauthGenerator();

    $refreshTokenPath = $currentPath . "/refresh_token.txt";

    $accessTokenFileObject = $currentPath . "/access_token.txt";

    $refreshToken = trim(file_get_contents($refreshTokenPath));

    $accessTokenObjectJson = $oauth->getToken($refreshToken);

    $accessTokenObject = json_decode($accessTokenObjectJson, true);

    $datetime = new \DateTime('now');

    $accessTokenObject['datetime'] = $datetime->format(DateTime::ATOM);

    file_put_contents($accessTokenFileObject, json_encode($accessTokenObject));

    expect(true)->toBeTrue();
});

test('testUploadDeArquivo', function () use ($currentPath) {

    $arr = [
        "./run-v2",
        "--filepath={$currentPath}/composer.json",
        "--folder=test",
        "--uniqueid=asdahsduasudha",
        "--rename"
    ];

    $dotenv = Dotenv::createImmutable($currentPath);

    $cli = new CommandLine($arr);

    $envLoad = new DotenvLoad($dotenv);

    $json = trim(file_get_contents("{$currentPath}/access_token.txt"));

    $_ENV['ACCESS_TOKEN'] = json_decode($json, true)['access_token'];

    $cli->start();

    $fileUploader = new FileUploader($envLoad, $cli, $currentPath);

    $infos = $fileUploader->upload();

    echo json_encode($infos);

    $fileUploader->removeFile($infos['path_display']);

    expect(true)->toBeTrue();
});
