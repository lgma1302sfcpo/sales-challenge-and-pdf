Sistema simples de gerenciamento de vendas desenvolvido com Laravel. Permite realizar operações essenciais como cadastro, edição e exclusão de vendas, além de geração de PDFs de forma prática.

Requisitos
PHP 8.0 ou superior

Composer

MySQL

Navegador moderno

🚀 Instalação
Clone o repositório:

git clone https://github.com/lgma1302sfcpo/sales-challenge-and-pdf.git
cd sales-challenge-and-pdf



Instale as dependências do PHP:

composer install
Configure o arquivo .env com as informações do banco de dados.

Configure os dados de conexão com o banco de dados

Execute as migrações:


php artisan migrate
▶️ Executando o Projeto
Inicie o servidor local:

php artisan serve


Depois, acesse no navegador:

http://127.0.0.1:8000


🧾 Geração de PDF
Este projeto utiliza o pacote barryvdh/laravel-dompdf para gerar PDFs das vendas.
Na tela de listagem, clique no botão "Gerar PDF" ao lado de uma venda para baixar o documento com os dados daquela transação.

📋 Funcionalidades
Cadastro de clientes e produtos

Registro de vendas com múltiplos produtos

Cálculo automático de subtotal

Pagamento à vista ou parcelado

Listagem, edição e exclusão de vendas

Exportação de venda em PDF

🧪 Extras
Organização por seções (venda e pagamento)

Modais para cadastro rápido de cliente e produto

Atualização dinâmica da interface via jQuery
