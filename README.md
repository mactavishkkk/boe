## Rodando o projeto

#### Nativo

Certifique-se de possuir o PHP (Composer), nodejs(npm) e o driver de um banco de dados relacional

 1. Abra um terminal na pasta desejada e clone o projeto

```bash
git clone https://github.com/mactavishkkk/boe.git
```

2. Instale todas as dependências

```bash
composer install
npm install
```

3. Agora renomei o arquivo chamado `.env.example` em seu diretório para `.env` e o adapte para as configurações de seu banco de dados.

4. Agora basta rodar as migrations junto de suas seeds e acessar http://localhost/

```bash
php artisan mitrate:fresh --seed
```

Obs: Caso sua pasta "storage" não venha com as devidas permissão dentro do container, digite:

```bash
./vendor/bin/sail chmod -R gu+w storage
./vendor/bin/sail chmod -R guo+w storage
./vendor/bin/sail php artisan cache:clear
```

Obs: Você também pode abrir um terminal dentro do container, para evitar esse repetitivo "./vendor/bin/sail {comand}" dessa forma: `docker exec -it container.id' bash` descubra o id do container com `docker ps`

#### Docker

 1. Abra um terminal na pasta desejada e clone o projeto

```bash
git clone https://github.com/mactavishkkk/boe.git
```
2. Entre na pasta raiz do projeto e suba o container do projeto digitando:

```bash
cd boe && docker compose up
```

3. Instale todas as dependências

```bash
./vendor/bin/sail composer install
./vendor/bin/sail npm install
```

5. Agora renomeio o arquivo chamado `.env.example` em seu diretório para `.env`

6. Agora basta rodar as migrations junto de suas seeds e acessar http://localhost/

```bash
php artisan mitrate:fresh --seed
```

Obs: Caso sua pasta "storage" não venha com as devidas permissão dentro do container, digite:

```bash
./vendor/bin/sail chmod -R gu+w storage
./vendor/bin/sail chmod -R guo+w storage
./vendor/bin/sail php artisan cache:clear
```

Obs: Você também pode abrir um terminal dentro do container, para evitar esse repetitivo "./vendor/bin/sail {comand}" dessa forma: `docker exec -it container.id' bash` descubra o id do container com `docker ps`