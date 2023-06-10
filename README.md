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
DB_DATABASE=nome_do_banco
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

- Procedimento Execução no github

1) Verificar Status 
        
        git status  
        
2) Idendetifica qual branch está 
        
        git branch
        
Obs.: Os proximos 2 comandos precisam de cuidado  

Ao identificar que esta na main exexuta para atualizar 

        git pull 

Se não não estiver na main exexuta para redirecionar para main 

        git checkout main  

3) Cria uma nova branch com novo nome 

        git checkout -b NOMENOVABRANCH
        
4) Adiciona tudo

        git add . 

5) Faz commit

        git commit -m "mensagem" 

6) Carregar no remoto

        git push -u origin NOMENOVABRANCH 

===========================================================

Aqui está a sequência organizada de comandos com algumas adições/modificações para atender às suas solicitações:

1. Criação de uma nova branch chamada "Ajustes":
```
git branch Ajustes
```

2. Sair da branch atual (main):
```
git checkout -
```

3. Mudar para a branch "Ajustes":
```
git checkout Ajustes
```

4. Renomear a branch "Ajustes" para "NovosAjustes":
```
git branch -m Ajustes NovosAjustes
```

5. Atualizar a branch "NovosAjustes" a partir da branch "main":
```
git merge main NovosAjustes
```
ou
```
git checkout NovosAjustes
git merge main
```

6. Apagar a branch "NovosAjustes":
```
git branch -d NovosAjustes
```

7. Dar git pull em uma branch específica sem precisar sair dela:
```
git pull origin NOME_BRANCH
```
Substitua "NOME_BRANCH" pelo nome da branch específica em que você deseja dar o pull.

8. Adicionar o arquivo README.md:
```
echo "# Project-Java" >> README.md
```

9. Iniciar o repositório Git:
```
git init
```

10. Configurar o email do usuário:
```
git config --global user.email "smaeljbs@gmail.com"
```

11. Configurar o nome do usuário:
```
git config --global user.name ijbs
```

12. Adicionar um arquivo específico:
```
git add NOMEARQUIVO
```
Substitua "NOMEARQUIVO" pelo nome do arquivo que você deseja adicionar.

13. Adicionar todos os arquivos modificados:
```
git add .
```

14. Fazer o primeiro commit:
```
git commit -m "first commit"
```

15. Renomear a branch "main" para "main_antiga" (opcional, caso você queira renomear a branch):
```
git branch -m main main_antiga
```

16. Adicionar o repositório remoto:
```
git remote add origin https://github.com/ijbs-dev/Project-Java.git
```

17. Fazer o push inicial para o repositório remoto:
```
git push -u origin main
```
18. Comando para resolver conflitos de git pull, quando vem tudo no remoto:
```
git pull --rebase --autostash
```
Por favor, lembre-se de adaptar os comandos de acordo com suas necessidades específicas.


