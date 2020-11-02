# formulario-docker
Projetinho com PHP, JavaScript, Bootstrap, Jquery, HTML5, CSS MySQL


# Sobre o Banco de Dados
1 - Ao executar o docker-compose, crie uma pasta chamada 'mysql' na raiz do repositório! Ela será responsável por armazenar o seu banco de dados! Sempre que encerrar o docker-compose, apague os dados desta pasta, pois se for rodar novamente a imagem dará erro porque haverá arquivos de cache dentro dela.

2 - O arquivo docker-compose não cria database e tables automaticamente, então crie manualmente, de acordo com as 2 últimas tabelas no arquivo sql dentro da pasta formulario. Verifique também o nome do bando de dados referido no arquivo 'conexao.php' na pasta rotinas, para criar um database equivalente.

3 - Como o docker-compose ainda não foi atualizado para criar os bancos, use o MySQL Workbench, PHP MyAdmin, Postgres ou um de sua preferência, para manipular o banco de dados.

4 - Ao executar o docker-compose, inspecione o network da sua imagem para obter os ips do banco de dados e do localhost.

# Sobre o Docker-Compose
1 - O docker-compose ainda não cria automaticamente todas as tabelas para utilizar no MySQL, porém está atualização será feita no futuro. No momento algumas funcionalidades ainda estão sendo implementadas.
