# SosPets

Passo-a-passo para rodar o projeto SosPet

Instalar o PHP 8.1.x ou superior (https://www.php.net/)

Instalar o Composer 2.5.5 ou superior (https://getcomposer.org/)

Instalar o git 2.40.1 ou superior (https://git-scm.com/)

Clonar o projeto SosPet para o computador local
git clone https://github.com/ijbs-dev/SosPet.git

Instalar uma IDE ou editor de código de sua preferência (Ex: Visual Studio Code)
https://code.visualstudio.com/

Fazer uma cópia do arquivo ".env.exemple" e renomear a cópia desse arquivo para ".env"


Configurar as variáveis de anbiente do arquivo .env com o nome do Banco de Dados, Usuário e Senha

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_bendo
DB_USERNAME=usuário
DB_PASSWORD=senha

- Na linha de comando, rodar os seguintes comandos:
composer update
npm install

- Para criar as tabelas do sistemas, rodar os seguintes comandos:
php artisan migrate

Abra 2 terminals (linhas de comando)

No terminal 1, rodar o seguinte comando:
php artisan serve

No terminal 2, rodar o seguinte comando:
npm run dev

