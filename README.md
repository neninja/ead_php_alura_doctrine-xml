# ead_php_alura_doctrine-xml

> Projeto referente a [este](https://cursos.alura.com.br/course/php-doctrine-mapeamento-banco-legado) curso.

1. Crie os containers
```sh
docker-compose up -d
```
> Caso queira, ao final da configuração, pare os containers com ``docker-compose down``

2. Baixe as dependências do composer
```sh
docker-compose exec app composer install
```
## Execução local

- Caso recém tenha feito a **configuração inicial** e os containers continuem rodando, tudo certo. Pode acessar ``localhost:8989``
- Do contrário, suba os containers novamente:
```sh
docker-compose up
```
> Pare com <kbd>Ctrl</kbd><kbd>C</kbd>

> Caso modifique Dockerfile, rebuilde com ``docker-compose up --build``

## Anotações


```sh
composer doctrine -- --help
```

```sh
composer doctrine orm:info
```

```sh
composer doctrine orm:mapping:describe Ator
```

```sh
composer doctrine orm:schema-tool:create -- --dump-sql
```

