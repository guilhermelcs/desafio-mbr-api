# desafio-mbr-api

Projeto contemplando a parte do back-end do desafio da WDC: https://gist.github.com/dev-mbr/f3c2c2d51fad265b3b75e12cc137b98b

Para iniciar este projeto em seu ambiente local, insira estes comandos em seu terminal:

#1 Clone o projeto
    
    git clone https://github.com/guilhermelcs/desafio-mbr-api.git
  
#2 Entre no repositório
   
    cd desafio-mbr-api
  
#3 Instale as dependências
    
    composer install
    
    
    npm install

#4 Faça uma cópia do arquivo .env
    
    cp .env.example .env
    
#5 Crie um banco de dados vazio (MySQL ou MariaDB)

#6 Adicione as informações do seu Banco de Dados ao arquivo .Env

#7 Faça a Migrate do Banco de Dados
    
    php artisan migrate
    
#8 Faça o Seeding do Banco de Dados

    php artisan db:seed --class=BrindeSeeder
 
#4 Startar o projeto
    
    php artisan serve
