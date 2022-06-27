## Descrição do projeto

O projeto consiste em um blog, que se baseia em 3 models (user, category e post), e construído fundamentado na estrutura MVC. Foi utilizado o framework PHP Laravel para o desenvolvimento da aplicação, e o phpMyAdmin responsável pela base de dados.

### Equipe integrante

- Allan Mariano : SP3031942
- Brayan Uehara : SP3026787
- Caio Silva : SP3026795
- Gabriel Bertholin : SP3024041 
- Pedro Satoshi : SP3024067

## Instruções de deployment

- Instalar um software para disponibilizar suporte ao uso de scripts PHP localmente no Windows. Exemplo: WampServer, XAMPP.
- Recomendado utilizar a versão 7 do PHP
- Inserir o código na pasta www do software
- Criar uma database no phpMyAdmin
- Configurar a conexão com a database no arquivo .env
- Na raiz do projeto, executar o comando "php artisan migrate --seed", para criar inicialmente as categorias do blog
- Ainda na raiz, para executar o projeto "php artisan serve"
