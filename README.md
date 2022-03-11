![alt text](/web/images/print.png)

Este é um exemplo de como você pode implementar o login social (Google e Facebook) em seus projetos Yii2.


ESTRUTURA DO PROJETO BASIC YII2
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


INSTALAÇÃO
------------

Para instalar as dependências necessárias em seu projeto veja as seguintes documentações:\
[https://github.com/yiisoft/yii2-authclient](https://github.com/user/repo/blob/branch/other_file.md)\
[https://github.com/yiisoft/yii2-authclient/blob/master/docs/guide/README.md](https://github.com/yiisoft/yii2-authclient/blob/master/docs/guide/README.md)

CONFIGURANDO O PROJETO
------------

### Composer

Após baixar o projeto rode o composer 

~~~
composer update
~~~

Agora vamos rodar as migrations. Obs.: É necessário já ter criado e configurado o banco em `config/db.php`.

~~~
php yii migrate
~~~

RODANDO O PROJETO
------------

O projeto foi configurado para rodas em:
~~~
http://localhost:8080
~~~

Então basta você iniciar o projeto com o comando:

~~~
php yii serve -port=8080
~~~