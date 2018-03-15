# Projeto Megaspirit
Prova de Aptidão Tecnológica desenvolvida no âmbito do Curso Secundário de Informática e Tecnologias Multimédia do Colégio de Gaia no ano lectivo 2013/2014.

## Instalação
Para poder visualizar o conteúdo desenvolvido nesta página, é necessário realizar alguns passos aqui descritos.

Antes de mais, é necessário assegurar que dispõe de um Servidor Web, podendo simular com programas como XAMPP ou WAMP.

Este projecto é constituído por 3 pastas – megaspirit (frontoffice público), cpainel (sistema de gestão) e ordersys (área reservada de clientes). Estas pastas devem ser copiadas para um directório do servidor, normalmente para as pastas www ou htdocs.

Colocada a pasta, navegar para a sub-pasta definitions em cada uma das 3 pastas e abrir o ficheiro connection.inc.php.

Faça coincidir a variável $filedir com o directório no seu computador/servidor e $webdir com o URL da barra de endereços do browser, e as variáveis $fowebdir e $fofiledir com os mesmos dados mas relativos ao frontoffice.

Defina também as credenciais de acesso do seu SGBD MySQL.

Feito isto, é necessário importar a Base de Dados, disponibilizada em database/megaspirit.sql recorrendo à interface web da ferramenta PHPMyAdmin. Assegure-se que crie uma nova base de dados e importe a base de dados do directório fornecido.

## Classificação
Esta Prova de Aptidão Tecnológica foi avaliada com a classificação de 20 valores, tendo sido a melhor do ano em que foi apresentada.
