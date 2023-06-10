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


## Procedimentos execução no github

1. Adicionar o arquivo README.md:
```
echo "# Project-Java" >> README.md
```

2. Iniciar o repositório Git:
```
git init
```

3. Configurar o email do usuário:
```
git config --global user.email "nome@email.com"
```

4. Configurar o nome do usuário:
```
git config --global user.name nomePessoa
```

5. Criação de uma nova branch chamada "Ajustes":
```
git branch Ajustes
```

6. Verificar Status 
```        
git status  
```        

7. Idendetifica qual branch está 
```        
git branch
```        

### Obs.: Os proximos 2 comandos precisam de cuidado  
8. Ao identificar que esta na main executa para atualizar 
```
git pull 
```

9. Se não não estiver na main executa para redirecionar para main 
```
git checkout main  
```

10. Mudar para a branch "Ajustes":
```
git checkout Ajustes
```

11. Renomear a branch "Ajustes" para "NovosAjustes":
```
git branch -m Ajustes NovosAjustes
```

12. Atualizar a branch "NovosAjustes" a partir da branch "main":
```
git merge main NovosAjustes
```
ou
```
git checkout NovosAjustes
git merge main
```

13. Apagar a branch "NovosAjustes":
```
git branch -d NovosAjustes
```

14. Dar git pull em uma branch específica sem precisar sair dela:
```
git pull origin NOME_BRANCH
```
Substitua "NOME_BRANCH" pelo nome da branch específica em que você deseja dar o pull.

15. Adicionar um arquivo específico:
```
git add NOMEARQUIVO
```
Substitua "NOMEARQUIVO" pelo nome do arquivo que você deseja adicionar.

16. Adicionar todos os arquivos modificados:
```
git add .
```

17. Fazer o primeiro commit:
```
git commit -m "first commit"
```

18. Renomear a branch "main" para "main_antiga" (opcional, caso você queira renomear a branch):
```
git branch -m main main_antiga
```

19. Adicionar o repositório remoto:
```
git remote add origin https://github.com/ijbs-dev/SosPet.git
```

20. Fazer o push inicial para o repositório remoto:
```
git push -u origin NOMENOVABRANCH 
```
