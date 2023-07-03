
# Sumário

- [BOE](#boe---bemol-omnichannel-experience)
- [Rodando o projeto](#rodando-o-projeto)
- [Stack's](#stacks-utilizadas)
- [Diagrama](#diagrama)

# BOE - Bemol Omnichannel Experience

Um projeto que visa a união das interações de todo o corpo de clientes em uma só experiencia, seja ela iniciada, desenvolvida e finalizada seja em qualquer canal de interação.

# Rodando o projeto

#### Nativo

Certifique-se de possuir o PHP >= 8.1, nodejs(npm) e o driver de um banco de dados relacional de sua escolha (_ele é apenas um detalhe_).

 1. Abra um terminal na pasta desejada e clone o projeto

```bash
git clone https://github.com/mactavishkkk/boe.git
```

2. Entre na raiz do projeto `cd boe` e instale todas as dependências

```bash
composer install
npm install
```

3. Agora renomei o arquivo chamado `.env.example` em seu diretório para `.env`, adapte-o para as configurações de seu banco de dados caso necessário.

4. Agora basta rodar as migrations junto de suas seeds e acessar http://localhost/

```bash
php artisan mitrate:fresh --seed
```

_Insto criará toda a estrutura da base de dados e alguns registros para você se sentir livre a testar!_

#### Docker

Para rodar o projeto em um container e dispensar a instalação de outras tecnologias, basta possuir em sua máquina o _Docker Desktop_ instalado e seguir por aqui:

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
# Stacks utilizadas

- Blade/breeze: "^1.21"
- Tailwind: "^3.1"
- Laravel: "^10.10"
- PHP: "^8.1"
- Docker Desktop: "^4.21"

# Diagrama

Diagrama da Infraestrutura e da Solução desenvolvido com _C4 Model_:

1. Baixe o diagrama [Clicando aqui](https://drive.google.com/file/d/1lPNqbIYHPWXeR9sQGSJ5rJf_wqzbNxSX/view?usp=sharing) para visitar o site exemplo.

2. Abra o arquivo baixado [Clicando aqui](https://app.diagrams.net/)
