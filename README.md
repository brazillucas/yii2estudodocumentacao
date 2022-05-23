<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii (Yes it is) 2.0 - Estudo da Documentação</h1>
    <br>
</p>

Repositório destino aos arquivos desenvolvidos nos meus estudos do Framework PHP Yii 2.0 seguindo os conteúdos da documentação oficial deste.

-------------------

O Yii 2 Basic Project Template é um aplicativo esqueleto [Yii 2](http://www.yiiframework.com/) melhor para a criação rápida de pequenos projetos.

O modelo contém os recursos básicos, incluindo login/logout do usuário e uma página de contato.
Ele inclui todas as configurações comumente usadas que permitem que você se concentre em adicionar novos recursos ao seu aplicativo.

ESTRUTURA DO DIRETÓRIO
-------------------

      assets/             contém definição de assets
      commands/           contém comandos do console (controllers)
      config/             contém configurações do aplicativo
      controllers/        contém classes do Web controller
      mail/               contém arquivos de visualização para e-mails
      models/             contém classes de modelo
      runtime/            contém arquivos gerados durante o tempo de execução
      tests/              contém vários testes para a aplicação básica
      vendor/             contém pacotes de dependência de terceiros
      views/              contém arquivos de view files para o aplicativo da Web
      web/                contém o script de entrada e recursos da Web



REQUISITOS
------------

O requisito mínimo deste modelo de projeto é que seu servidor Web suporte PHP 5.6.0.


INSTALAÇÃO
------------

### Instalar via Composer

Se você não tem [Composer](http://getcomposer.org/), você pode instalá-lo seguindo as instruções em [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Você pode então instalar este modelo de projeto usando o seguinte comando:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
~~~

Agora você deve ser capaz de acessar o aplicativo através da seguinte URL, assumindo que `basic` é o diretório diretamente sob a raiz da Web.

~~~
http://localhost/basic/web/
