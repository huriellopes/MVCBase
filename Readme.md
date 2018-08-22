# MVC Base

> Esse mvc foi desenvolvido para ajudar aqueles que necessitam desenvolver sites e sistemas pequenos, lembrando que é possivel ser intalado outras libs pelo composer para ser desenvolvido aplicações maiores!

## Requisitos

- PHP 7 ou superior
- Banco de Dados (MySQL, Oracle, SQL Server ou ...)
- Editor de texto (Sublime ou outro da sua escolha)
- Composer
- Node/Npm

## Como utilizar?

> Para utilizar, você pode baixar o arquivo zip ou clonar o repositório com o comando a seguir:

- git clone git@github.com:huriellopes/MVCBase.git

> Depois de baixado/Clonado, você deverá rodar o comando do composer, caso tenha o composer instalado, use o comando a seguir:

- composer install

> Caso não tenha o composer instalado, poderá usar o composer que se encontra dentro do projeto, usando o comando a seguir:

- composer.phar install

> Feito isso o mvc está pronto para ser utilizado! E para se testar, o composer já tem um server configurado, use o comando a seguir:

- composer server

> Para utilizar com o banco de dados, você terá que fazer a configuração do banco de dados na aplicação, no arquivo "app/Config/database.php"

## Scripts existentes no composer

> Os scripts existentes no composer para ser utilizados são:

- composer bootstrap

Obs.: Esse script fará a instalação do bootstrap no seu projeto.

- composer jquery

Obs.: Esse script fará a instalação do jquery no seu projeto.

- composer popper.js

Obs.: Esse script fará a instalação do popper.js no seu projeto.

- composer sweetalert

Obs.: Esse script fará a instalação do sweetalert para bootstrap no seu projet.

> Caso não queira utilizar o bootstrap em seus projetos, e quiser adicionar algum script de instação no composer, abra o arquivo "composer.json" e vá na parte de scripts e adicione o que deseje, depois de adicionado, execute esse comando a seguir:

- composer dump

## Lincense

> A lincença dessa base de MVC é liberada, só peço que se esse projeto for utilizado comercialmente, deixe os créditos de alguma forma, dentro do código fonte!