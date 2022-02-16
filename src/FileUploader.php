<?php

namespace App;

class FileUploader
{
    private CommandLine $cmd;
    private DotenvLoad $dotenvLoad;
    public function __construct(DotenvLoad $dotenvLoad, CommandLine $cmd, string $currentPath)
    {
        $this->currentPath = $currentPath;
        $this->dotenvLoad = $dotenvLoad;
        $this->cmd = $cmd;
    }

    public function upload()
    {
        $key = Utils::randomKey();

        $tempPath = $this->currentPath . "/temp";

        if (!is_dir($tempPath)) {
            mkdir($tempPath, 0777, true);
        }

        $localFile = $this->cmd->getFilepath();

        $localFileInfo = pathinfo($localFile);

        $formattedName = $localFileInfo['filename'];

        $newFileName = "{$formattedName}.{$localFileInfo['extension']}";

        if ($this->cmd->getRename()) {
            $newFileName = "{$formattedName}_{$key}.{$localFileInfo['extension']}";
        }

        $newFullPath = "{$tempPath}/{$newFileName}";

        copy($localFile, $newFullPath);

        $dropboxClient = $this->getDropboxClient()->getDropbox();

        $cliPathname = "{$this->cmd->getFolder()}/{$newFileName}";

        $uploadDropbox = $dropboxClient->upload($cliPathname, file_get_contents($newFullPath));

        unlink($newFullPath);

        return $uploadDropbox;
    }

    public function removeFile(string $path): void
    {
        $dropboxClient = $this->getDropboxClient()->getDropbox();

        $dropboxClient->delete($path);
    }

    private function getDropboxClient(): DropboxClient
    {
        $dropbox = new DropboxClient();
        return $dropbox->setAccessToken($this->dotenvLoad->getAccessToken());
    }
}
