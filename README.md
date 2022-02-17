#### instalar em dev: composer install
#### instalar em producao: composer install --no-dev
#### definir access token no .env
#### permissao de execucao: chmod +x run

### Exemplo de input
```bash
./run --filepath="/caminho/do/arquivo.docx" --folder="nome_da_pasta_no_dropbox" --uniqueid="1616153143.306" --rename
```

### Exemplo de output
```bash
{"name":"COMPOSER_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","path_lower":"\/asd\/composer_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","path_display":"\/asd\/COMPOSER_2e7176698f67b20a56e78bd1ef08489942c9cfc6.json","id":"id:mIaxNnMYK7AAAAAAAAAASw","client_modified":"2022-02-16T16:28:29Z","server_modified":"2022-02-16T16:28:30Z","rev":"5d82523d5969954f7daf6","size":399,"is_downloadable":true,"content_hash":"33ceb8a3a985de47f4adab496cbdc201b2abae321a353dd5c8eba2162cc520f0",".tag":"file"}
```