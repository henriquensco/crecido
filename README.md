# Aplicação Laravel Imóveis

Este é um guia sobre como executar o projeto da API em Laravel utilizando Docker. Para executar o projeto, é necessário ter o Docker instalado em sua máquina e seguir as instruções abaixo.

## Clonando o repositório

Clone o repositório do projeto Laravel utilizando o seguinte comando:

```bash
git clone git@github.com:henriquensco/crecido.git
```

Em seguida, acesse a pasta do projeto:

```bash
 cd crecido
```

## Executando o container Docker

Para criar um container Docker, execute o seguinte comando estando na pasta do projeto:

```bash
docker-compose up -d
```

Isso criará o container para a aplicação Laravel, o banco de dados MySQL e o servidor Nginx.

Verifique os containers criados executando o comando:

```bash
docker ps
```

## Instalando dependências e configurando a aplicação

Para instalar as dependências do Laravel, execute o seguinte comando:

```bash
docker exec -t crecido-app-1 composer install
```

Em seguida, crie as tabelas no banco de dados:

```bash
docker exec -t crecido-app-1 php artisan migrate
```

## Executando a aplicação

Para iniciar a aplicação, execute o seguinte comando:

```bash
docker exec -t crecido-app-1 php artisan serve
```
