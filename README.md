#### instalar em dev: composer install
#### instalar em producao: composer install --no-dev
#### definir access token no .env
#### permissao de execucao: chmod +x run
#### permissao de execucao: chmod +x runV2
#### necessário definir o .env o APP_KEY e APP_SECRET para conseguir usar o dropbox-v2

## Se você já tiver o refresh token pode rodar com a flag --refresh-token="SEU REFRESH TOKEN AQUI"
```bash
./dropbox-make-refresh-token --refresh_token="SEU REFRESH TOKEN AQUI"
```

## Se você não tiver o refresh token use a flag --code="SEU AUTHORIZATION CODE AQUI"
```bash
./dropbox-make-refresh-token --code="SEU AUTHORIZATION CODE AQUI"
```
#### code: caso precise gerar um novo authorization_code, pode passar um autorization_code errado que a ferramenta retornará a URL certa
#### é necessário rodar o script dropbox-make-refresh-token para configurar o ambiente conseguir fazer upload no dropbox
#### para cada NOVO refresh token gerado o anterior é cancelado, por isso deve ser usado a flag --refresh_token caso tenha um refresh token sendo utilizado em outras aplicações

## Exemplo de input
```bash
./runV2 --filepath="/caminho/do/arquivo.docx" --folder="nome_da_pasta_no_dropbox" --uniqueid="1616153143.306" --rename
```
#### rename: cria hash randomica no nome do arquivo - opcional
#### folder: cria pasta no dropbox - obrigatório
#### filepath: caminho do arquivo local - obrigatório
#### uniqueid: unique id para gerar link do arquivo e salvar no banco - obrigatório
#### deleteOriginalFilepath: deleta arquivo original - opcional

## Exemplo de output
```bash
{"name":"COMPOSER_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","path_lower":"\/asd\/composer_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","path_display":"\/asd\/COMPOSER_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","id":"id:mIaxNnMYK7AAAAAAAAAASw","client_modified":"2022-02-16T16:28:29Z","server_modified":"2022-02-16T16:28:30Z","rev":"5d82523d5969954f7daf6","size":399,"is_downloadable":true,"content_hash":"33ceb8a3a985de47f4adab496cbdc201b2abae321a353dd5c8eba2162cc520f0",".tag":"file"}
```