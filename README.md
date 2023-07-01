
# BOE - Bemol Omnichannel Experience

Um projeto que visa a união das interações de todo o corpo de clientes em uma só experiencia, seja ela iniciada, desenvolvida e finalizada seja em qualquer canal de interação.





## Rodando o projeto

 1. Abra um terminal na pasta desejada e clone o projeto

```bash
git clone https://github.com/mactavishkkk/boe.git && cd boe
```
2. Entre na pasta raiz do projeto e suba o container do projeto digitando:

```bash
cd boe && ./vendor/bin/sail up
```

3. Instale todas as dependências

```bash
./vendor/bin/sail composer install
./vendor/bin/sail npm install
```

Obs: Caso sua pasta "storage" não venha com as devidas permissão dentro do container, digite:

```bash
./vendor/bin/sail chmod -R gu+w storage

./vendor/bin/sail chmod -R guo+w storage

./vendor/bin/sail php artisan cache:clear
```

Obs: Você também pode abrir um terminal dentro do container, para evitar esse repetitivo "./vendor/bin/sail {comand}"

```bash
docker exec -it 'container.id' bash
```

descubra o id do container com
```bash
docker ps
```


## Stack utilizada

- Blade
- Laravel 10.10
- PHP 8.1
- Docker Desktop 4.21
