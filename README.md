Sales Management System
Este é um sistema de gerenciamento de vendas desenvolvido com Laravel.

Requisitos
PHP ^8.0
Composer
MySQL
Instalação
Clone o repositório:

git clone https://github.com/Gabriel-Trindade/dc-challenge.git
cd dc-challenge
Instale as dependências do PHP:

composer install
Configure o arquivo .env com as informações do banco de dados.

Execute as migrações:

php artisan migrate
Executando o Projeto
Inicie o servidor:

php artisan serve
Agora, acesse http://localhost:8000.

Geração de PDF
Este projeto usa Barryvdh DomPDF. Use o botão "Gerar PDF" na interface de listagem de vendas.

Funcionalidades
O projeto consegue perfomar o basico do challenge, conseguindo cadastrar uma venda, listar, editar e deletar e como um pequeno extra, gerar pdf de uma venda.

Licença
Licenciado sob a MIT License.